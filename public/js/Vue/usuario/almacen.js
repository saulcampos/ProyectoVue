function init()
{
	var	route = document.querySelector("[name=route]").value;

	var urlAlmacen='/apiAlmacen';
	var urlProductos='/apiProductos';
	var urlProveedor='/apiProveedores';

new Vue({
		http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},

	el:'#apiAlmacen',

	created:function()
	{
		this.getProveedores();
		this.getAlmacen();
		this.getProductos();
	},

	data:{

	//Tabla de Almacen
	almacen:[],
	idalmacen:'',
	fecha_logica:'',
	fecha:'',
	descripcion:'',
	idproveedor:'',
	total_costos:'',
	AuxIdalmacen:'',

	proveedores:[],
    idproveedor:"",


	//Producto
	productos:[],
	idproducto:'',

   //
    matris:[],
    productosMatris:[],
    DAlmacen:[],
    sub_total_unidades:[],
    sub_total_costos:[],
    sub_total_unidad_peso:[],/*
    seviciosMatris:'',
	detalles:[],*/

	editando:false,
	buscar:''

		
	},

	methods:{
		getAlmacen:function(){
			this.$http.get(route+urlAlmacen).then
			(function(response){
				console.log(response);
				this.almacen=response.data;
			});
		},

		getRefresh:function(){
			this.getProductos();
			this.getProveedores();
		},

		getProductos:function(){
			this.$http.get(route+urlProductos).then
			(function(response){
				console.log(response);
				this.productos=response.data;
			});
		},

		getProveedores:function(){
			this.$http.get(route+urlProveedor).then
			(function(response){
				console.log(response);
				this.proveedores=response.data;
			});
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
									'cantidad_unidad_peso':response.data.cantidad_unidad_peso,
									'tipo':response.data.tipo,	
								}

								this.matris.push(unProducto);
								this.idproducto=" ";
								console.log(unProducto);
							}
							else
							 alert("El producto no existe");
				});
				
			 } else
			    alert('Selecciona un producto');
		},


		agregarAlmacen:function () {
				/*	sub_total_unidades:[x],
    				sub_total_costos:[],
    				sub_total_unidad_peso:[]*/
    				
			for (var i = this.matris.length - 1; i >= 0; i--)
		     {  this.sub_total_costos[i]= 
		     							parseFloat(this.sub_total_unidades[i])* 
		     							parseFloat(this.matris[i].precio_compra);

		     	this.sub_total_unidad_peso[i]= 
		     							parseFloat(this.sub_total_unidades[i])* 
		     							parseFloat(this.matris[i].cantidad_unidad_peso);
		     }
		     //Todos los Sub totales no tiene ma this.matris
		     
			var almacen=
						{			
							idalmacen:moment().format('MMMMDoYYYYhmmss'),	
							fecha_logica:moment().format('LL'), 
							fecha:moment().format('YYYY-MM-DD'),
							descripcion:this.descripcion,
							idproveedor:this.idproveedor,
							
							
							total_costos:this.granTotalCotos,

							
							detalle:this.matris,
							sub_total_unidades:this.sub_total_unidades,
							sub_total_costos:this.sub_total_costos,
							sub_total_unidad_peso:this.sub_total_unidad_peso
						};
						
						console.log(almacen);
					
				if (this.idproveedor && this.granTotalCotos > 0 ) 
				{

				this.$http.post(route+urlAlmacen, almacen).then
				(function(response)
				 { 
				 	this.getAlmacen();
					this.Vacio();
					$('#ventana_modal').modal('hide');
					console.log(response);
				 })


				}else
					alert("No puedes inserta sin un Proveedor, Productos o Cantidades nulas");


		},




		showAlmacen:function(id)
		{	/*debugger;*/
			this.editando=true;
			this.showModal();

			this.$http.get(route+urlAlmacen+ '/' + id).then
			(function(response){
				console.log(response);
				this.AuxIdalmacen=response.data.idalmacen;
				this.fecha_logica=response.data.fecha_logica;
				this.descripcion=response.data.descripcion;
				this.idproveedor=response.data.idproveedor;
				this.total_costos=response.data.total_costos;

			});

			
			this.$http.get(route+'/DetalleAlmacen/' + id).then
			(function(response){
				console.log(response);
				this.DAlmacen=response.data;
			});


		},


		eliminarDAlmacen:function(id){
			var confirmar = confirm("Esta seguro de eliminar el registro?")

			if(confirmar){
			this.$http.get(route+'/EliminarDAlmacen/'+ id).then
			(function(response){
				this.eliminarAlmacen(id);
			});
		  }	
		},

		eliminarAlmacen:function(id)
		{	this.$http.delete(route+urlAlmacen + '/' + id).then
			(function(response){
				this.Vacio();
				this.getAlmacen();
				$('#ventana_modal').modal('hide');	
			});
		},

		eliminarProducto:function(id)
		{this.matris.splice(id,1);},	


		showModal:function(){
				$('#ventana_modal').modal('show');//Mostrar un venta modal
			},

			Vacio:function(){
				this.idalmacen='';	
				this.descripcion='';
				this.fecha=''; 
				this.fecha_logica='';
				this.idproveedor='';
				this.total='';

				this.AuxIdalmacen='';
				this.editando=false;	
				this.DAlmacen=[];


				
				this.granTotalCotos=0;

							
				this.matris=[];
				this.sub_total_unidades=[];
				this.sub_total_costos=[];
				this.sub_total_unidad_peso=[];
				
			},
		
			Canselar:function()
	        {
	        	this.Vacio();
				$('#ventana_modal').modal('hide');
	           /*location.reload();   */
			},
	



	},//FIN DEL Mehthods


computed:{
		filtroAlmacen:function(){
			return this.almacen.filter((almacen)=>{
				return almacen.fecha_logica.toLowerCase().match(this.buscar.toLowerCase().trim());
			});
		},
		
        granTotalCotos:function(){
		   var acumulador = 0;
		   for (var i = this.matris.length - 1; i >= 0; i--)
		     {
		     	acumulador = acumulador +(this.sub_total_unidades[i]*
		     				  parseFloat(this.matris[i].precio_compra));
		     }
			 return (acumulador.toFixed(2));

		},

		



		SubTotalCostos(){	
			return (id)	=>{	
			var tota=0;

				if (this.matris.length) 
			   	{		  tota =this.sub_total_unidades[id] * 
			 		      parseFloat(this.matris[id].precio_compra);
			   	}

			return (tota.toFixed(3));
	 	}},
	
		SubTotalUnidadesPeso(){	


			return (id)	=>{	
			var tot=0;

				if (this.matris.length)
					{	tot =this.sub_total_unidades[id] * 
			 		parseFloat(this.matris[id].cantidad_unidad_peso);	
			    	}

			return (tot.toFixed(3));
	  		}},


	},//Fin del computed
});
}
window.onload=init;
Vue.config.devtools = true;

