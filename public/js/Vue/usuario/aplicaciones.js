function init()
{
	var	route = document.querySelector("[name=route]").value;

	/*Rutas parametrisadas SELECT*/
	var urlHV='/HistVacunaciones/';
	var urlDHV='/DetalleHistVacuna/';
	var urlHA='/HistAlimentaciones/';
	var urlDHA='/DetalleHistAlimenta/';
	var urlProductos='/apiProductos';
	var urlAlimentos='/Alimentos';
	var urlVacunas='/Vacunas';
	var urlCliente='/apiClientes';
	var urlGalpones='/apiGalpones';
	var Inactivos='/GalponesInactivos';

	/*Hacer POT'S*/
	var urlVentas='/apiVentas';
	var urlMortalidades='/apiMortalidades';
	var urlVacunaciones='/apiVacunaciones';
	var urlAlimentaciones='/apiAlimentaciones';





	

new Vue({
		http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},

	el:'#apiAplicasiones',

	created:function()
	{
		this.getGalpones();
		this.getGalponesInactivos();
		this.getClientes();
		this.getAlimentos();
		this.getVacunas();	
	},

	data:{
	//Galpones


	galpones:[],
	galponesInactivos:[],
	nombre:'',
	idgalpon:'',
	idalmacen:'',
	total:'',
	idproducto:'',
	idalmacen:'',
	status:'',
	precio_venta:'',

	//Mortalidades
	cantidad:'',


	//Estandar
	idproducto:'',


	//Ventas
	clientes:[],
	idcliente:'',
	cantidadVenta:0,
	total_venta:'',


	HistorialA:[],
	DHA:[],
	HistorialV:[],
	DHV:[],







	/*Alimetaciones*/
	observacion:'',
	observacion2:'',

	sub_total_unidad_peso:[],
	sub_total_unidad_peso2:[],
	sub_total_costos:[],
	sub_total_costos2:[],
	alimentos:[],
	vacunas:[],

    matris:[],
    matris2:[],
    productosMatris2:[],
    productosMatris:[],

		
	},

	methods:{

		getRefresh:function(){
		this.getGalpones();
		this.getGalponesInactivos();
		this.getClientes();
		this.getVacunas();
		this.getAlimentos();
		
		},
		
		getGalpones:function(){
			this.$http.get(route+urlGalpones).then
			(function(response){
				console.log(response);
				this.galpones=response.data;
			});
		},

		getAlimentos:function(){
			this.$http.get(route+urlAlimentos).then
			(function(response){
				console.log(response);
				this.alimentos=response.data;
			});
		},

		getVacunas:function(){
			this.$http.get(route+urlVacunas).then
			(function(response){
				console.log(response);
				this.vacunas=response.data;
			});
		},

		getGalponesInactivos:function(){
			this.$http.get(route+Inactivos).then
			(function(response){
				console.log(response);
				this.galponesInactivos=response.data;
			});
		},

		getClientes:function(){
			this.$http.get(route+urlCliente).then
			(function(response){
				console.log(response);
				this.clientes=response.data;
			});
		},

		getHistorialA:function(id){
			this.$http.get(route+urlHA+id).then
			(function(response){
				console.log(response);
				this.HistorialA=response.data;
			});
		},

		getDHA:function(id){
			this.DHA=[];
			this.$http.get(route+urlDHA+id).then
			(function(response){
				console.log(response);
				this.DHA=response.data;
			});
		},


		getHistorialV:function(id){

			this.$http.get(route+urlHV+id).then
			(function(response){
				console.log(response);
				this.HistorialV=response.data;
			});
		},

		getDHV:function(id){
			this.DHV=[];
			this.$http.get(route+urlDHV+id).then
			(function(response){
				console.log(response);
				this.DHV=response.data;
			});
		},

		showGalpon:function(id)
			{   
				this.showModal();

				this.$http.get(route+urlGalpones+'/'+id).then
				(function(response){
					console.log(response);
					this.idgalpon=response.data.idgalpon,
					this.status=response.data.status,
					this.nombre=response.data.gallinero.nombre,
					this.total=response.data.meta.total,
					this.idproducto=response.data.meta.idproducto,
					this.precio_venta=response.data.meta.producto.precio_venta,
					this.idalmacen=response.data.idalmacen	

					this.getHistorialA(this.idgalpon);			
					this.getHistorialV(this.idgalpon);
				});
			},




		agregarVenta:function(){
			
			var	venta={
				idventa:moment().format('MMMMDoYYYYhmmss'),
				fecha:moment().format('YYYY-MM-DD'),
				total_venta:this.granTotal(),
				idcliente:this.idcliente,

				idproducto:this.idproducto,
				cantidad:this.cantidadVenta,
				precio_venta:this.precio_venta
			};

			console.log(venta);

			if (this.cantidadVenta <= this.total ) {
				if (venta.idcliente) {
					this.$http.post(route+urlVentas, venta)
					.then(function(response){
						console.log(response);
						this.Vacio();
						alert("Venta agregada");
					});
			}else{
				alert('Selecione a un cliente');
			}
				
			}else{
				alert("La cantidad de pollitos que puedes vender son solos los que el galpon posee");
				this.cantidadVenta='';
			}
			

			
		},

			agregarMortalidad:function(){

					var mortalidad={
					cantidad:this.cantidad,
					idproducto:this.idproducto,				
					idgalpon:this.idgalpon
				};
				
				console.log(mortalidad);

			if (mortalidad.cantidad) 
			{
				this.$http.post(route+urlMortalidades, mortalidad).then
				(function(response){
					console.log(response);
					this.Vacio();
					alert("mortalidad agregada");
				});
			}
			else
			    alert("No puede enviarlo con el campo vacio");	
			},





			getProducto:function(id)
		   { 
			if(id)
			{	this.$http.get(route+urlProductos+'/'+id).then
				(function(response){
						console.log(response);
						this.productosMatris=response.data;

							if(this.productosMatris){
								var unProducto={
									'idproducto':response.data.idproducto,
									'nombre':response.data.nombre,
									'precio_compra':response.data.precio_compra,
									'cantidad':response.data.cantidad_unidad_peso,
									'stock':response.data.stock,
									'tipo':response.data.tipo,
									
									
								}

								this.matris.push(unProducto);
								this.idproducto=" ";
								console.log("producto insertada en la matris: "+unProducto);
							}
							else
							 alert("El producto no existe");
				});
				
			 } else
			    alert('Selecciona un producto');
		},

		getProducto2:function(id)
		   { 
			if(id)
			{	this.$http.get(route+urlProductos+'/'+id).then
				(function(response){
						console.log(response);
						this.productosMatris2=response.data;

							if(this.productosMatris2){
								var unProducto={
									'idproducto':response.data.idproducto,
									'nombre':response.data.nombre,
									'precio_compra':response.data.precio_compra,
									'cantidad':response.data.cantidad_unidad_peso,
									'stock':response.data.stock,
									'tipo':response.data.tipo,
									
									
								}

								this.matris2.push(unProducto);
								this.idproducto=" ";
								console.log("producto insertada en la matris2: "+unProducto);
							}
							else
							 alert("El producto no existe");
				});
				
			 } else
			    alert('Selecciona un producto');
		},


		AddAlimentacion:function(){
					var total=0;
					var precio_kilo=0;

					     for (var i = this.matris.length - 1; i >= 0; i--)
					        {	
					        	precio_kilo=
		     							parseFloat(this.matris[i].precio_compra)/
		     							parseFloat(this.matris[i].cantidad);

					        	this.sub_total_costos[i]=precio_kilo* 
		     							parseFloat(this.sub_total_unidad_peso[i]);

		     				 
		     				  precio_kilo=0;
					        }

					var alimentacion={

							 idalimentacion:moment().format('MMMMDoYYYYhmmss'),
							 fecha_logica:moment().format('LL'), 				
							 fecha:moment().format('YYYY-MM-DD'),
							 total_costos:this.granTotalCotos,
							 observacion:this.observacion,
							 idgalpon:this.idgalpon,
		 
							 detalle:this.matris,
							 sub_total_unidad_peso:this.sub_total_unidad_peso,
							 sub_total_costos:this.sub_total_costos
					};
				
				console.log(alimentacion);

					if (alimentacion.total_costos) 
			   		{
				  		this.$http.post(route+urlAlimentaciones, alimentacion).then
				  		(function(response){
							console.log(response);
							this.Vacio();
				  		});
			   		}
			  		else
			    		alert("No puede enviarlo con el campo vacio");	
			},



			AddVacunacion:function(){
					var total=0;
					var precio_kilo=0;

					     for (var i = this.matris2.length - 1; i >= 0; i--)
					        {	
					        	precio_kilo=
		     							parseFloat(this.matris2[i].precio_compra)/
		     							parseFloat(this.matris2[i].cantidad);

					        	this.sub_total_costos2[i]=precio_kilo* 
		     							parseFloat(this.sub_total_unidad_peso2[i]);

		     				 
		     				  precio_kilo=0;
					        }

					var vacunacion={

							 idvacunacion:moment().format('MMMMDoYYYYhmmss'),
							 fecha_logica:moment().format('LL'), 				
							 fecha:moment().format('YYYY-MM-DD'),
							 total_costos:this.granTotalCotos2,
							 observacion:this.observacion2,
							 idgalpon:this.idgalpon,
		 
							 detalle:this.matris2,
							 sub_total_unidad_peso:this.sub_total_unidad_peso2,
							 sub_total_costos:this.sub_total_costos2
					};
				
				console.log(vacunacion);

					if (vacunacion.total_costos) 
			   		{
				  		this.$http.post(route+urlVacunaciones, vacunacion).then
				  		(function(response){
							console.log(response);
							this.Vacio();
				  		});
			   		}
			  		else
			    		alert("No puede enviarlo con el campo vacio");	
			},

		eliminarProducto:function(id)
		{this.matris.splice(id,1);},

		eliminarProducto2:function(id)
		{this.matris2.splice(id,1);},


		showModal:function(){
				$('#ventana_modal').modal('show');
			},

		Canselar:function(){
				
				this.Vacio();
				$('#ventana_modal').modal('hide');	

			},


		Validacion:function(){
			if (this.total < this.cantidad) {
				alert("La es incoherente");
				this.cantidad='';
			}
		},
		
			Vacio:function(){
				this.idgalpon='';

				this.cantidad='';
				this.status='';
				this.observacion='';
				this.observacion2='';

				this.sub_total_unidad_peso=[];
				this.sub_total_costos=[];
				this.matris=[];
				this.productosMatris=[];

				this.HistorialA=[];
				this.DHA=[];
				this.HistorialV=[];
				this.DHV=[];



				this.sub_total_unidad_peso2=[];
				this.sub_total_costos2=[];
				this.matris2=[];
				this.productosMatris2=[];
			},

		granTotal:function(){
			
		     return ((this.cantidadVenta * this.precio_venta).toFixed(2));
		},
			

	},//FIN DEL Mehthods


computed:{


        granTotalCotos:function(){
		   var acumulador = 0;
		   var precio_kilo=0;
		   var	subTotal=0;

		   for (var i = this.matris.length - 1; i >= 0; i--)
		     {
		     	precio_kilo=
			   			     parseFloat(this.matris[i].precio_compra)/
			   			     parseFloat(this.matris[i].cantidad);
			    subTotal=
			                 precio_kilo* 
			 		         parseFloat(this.sub_total_unidad_peso[i]);

		     	acumulador = acumulador +subTotal;


		     	subTotal=0;
		        precio_kilo=0;
		     }
			 return (acumulador.toFixed(2));

		},


		granTotalCotos2:function(){
		   var acumulador = 0;
		   var precio_kilo=0;
		   var	subTotal=0;

		   for (var i = this.matris2.length - 1; i >= 0; i--)
		     {
		     	precio_kilo=
			   			     parseFloat(this.matris2[i].precio_compra)/
			   			     parseFloat(this.matris2[i].cantidad);
			    subTotal=
			                 precio_kilo* 
			 		         parseFloat(this.sub_total_unidad_peso2[i]);

		     	acumulador = acumulador +subTotal;


		     	subTotal=0;
		        precio_kilo=0;
		     }
			 return (acumulador.toFixed(2));

		},

        SubTotalCostos(){	
			return (id)	=>{	
			var total=0;
			var precio_kilo=0;

				if (this.matris.length) 
			   	{		  
			   			precio_kilo=
			   			     parseFloat(this.matris[id].precio_compra)/
			   			     parseFloat(this.matris[id].cantidad);


			   			  total =precio_kilo* 
			 		      parseFloat(this.sub_total_unidad_peso[id]);
			   	}

			return (total.toFixed(3));
	 	}},


	 	 SubTotalCostos2(){	
			return (id)	=>{	
			var total=0;
			var precio_kilo=0;

				if (this.matris2.length) 
			   	{		  
			   			precio_kilo=
			   			     parseFloat(this.matris2[id].precio_compra)/
			   			     parseFloat(this.matris2[id].cantidad);


			   			  total =precio_kilo* 
			 		      parseFloat(this.sub_total_unidad_peso2[id]);
			   	}

			return (total.toFixed(3));
	 	}},
		
		
	},//Fin del computed





});
}
window.onload=init;
Vue.config.devtools = true;
