function init()
{
	var	route = document.querySelector("[name=route]").value;

	var urlGallineros='/apiGallineros';
	var urlGalpones='/apiGalpones';
	var urlMetas='/apiMetas';

new Vue({
		http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},

	el:'#crearGalpones',

	created:function()
	{
	        this.getGallineros();
	        this.ShowStock();
	        this.ShowProduccion();
	},

	data:{

	//Metas
	AuxIdmeta:'',
	fecha_inicio:'',
	fecha_fin:'',
	total:'',
	observacion:'',
	idproducto:'12344431',
	status:'',

	//Tabla de Galpones
	descripcion:'',
	idgallinero:'',

	


	//Gallineros muestra
	gallineros:[],
	Mnombre:'',
	Mcantidad:'',

	//Pollitos
	stock:'',
	pollitosProduccion:0,


	nombre:'',
	status_g:'',
	mensaje:'',

		
	},

	methods:{

		getRefresh:function(){
			this.getGallineros();
			this.ShowStock();
			this.ShowProduccion();
		},
		
		getGallineros:function(){
			this.$http.get(route+urlGallineros).then
			(function(response){
				console.log(response);
				this.gallineros=response.data;
			});
		},

		//Existe un adiferencia entre objeto y arreglo
		//Este es un OBJETO
		ShowStock:function(){
				this.$http.get(route+'/apiProductos/12344431').then
				(function(response){
					console.log(response);
					this.stock=response.data.stock;

				});
			},

			//Este es un Array=Rutas parametrisadas
			ShowProduccion:function(){
				this.$http.get(route+'/pollitosProduccion').then
				(function(response){
					console.log(response);
					var num = 0; 
					num= response.data[0].pollitosProduccion;

					if (num > 0)
						this.pollitosProduccion = num;

				});
			},

			ShowGallinero:function(id){
		
				this.Mnombre="";
				this.Mcantidad="";
				this.$http.get(route+urlGallineros + '/' + id).then
				(function(response){
					console.log(response);
					this.Mnombre=response.data.nombre;
					this.Mcantidad=response.data.cantidad;
				
					if (this.total > response.data.cantidad)
						this.Confirmacion("el gallinero puede soportar una cantidad de pollitos");
				});
			},
			
			Confirmacion:function(id){
				this.mensaje=id;
				$('#alert').modal('show');
			},

			
			Close:function(){
				$('#alert').modal('hide');
			},

			Disponibilida:function(){  
				
				var result=0;
				result = parseFloat(this.stock)-parseFloat(this.pollitosProduccion);

				if(this.total > result)
				  {this.total=" ";
				   this.Confirmacion("Esa cantidad de pollitos no hay en almacen, Solo hay: "+result+" pollitos");
				  }
			},
		  
			
		
/*UPDATE gallineros SET status=1;
UPDATE productos SET stock=0 WHERE idproducto='12344431';
delete from galpones;
delete from metas;

delete from detalle_almacen;
delete from almacen;*/

		   AddGalponOk:function () {
	 var galpon={
	 			 fecha:moment().format('YYYY-MM-DD'),
				 descripcion:this.descripcion,
				 idmeta:moment().format('YYYYYYhmms'),
				 idgallinero:this.idgallinero,

				 fecha_inicio:this.fecha_inicio,
				 fecha_fin:this.fecha_fin,
				 observacion:this.observacion,
				 idproducto:this.idproducto,
				 total:this.total
				};
				
				console.log(galpon);

				if (galpon.fecha  && galpon.idmeta &&
					galpon.idgallinero && galpon.fecha_fin &&
					galpon.fecha_inicio  && galpon.idproducto 
					&& galpon.total >0) 
					{
						this.$http.post(route+urlGalpones,galpon).then
						(function(response){
						console.log(response);
						
							this.BajaGallinero(this.idgallinero);


						});
					}
				else
					alert("Todos los campos tienen que llenarse,si ese no es el problema, profavor refresque la pagina");
		   
		   },


		  

		   BajaGallinero:function(id) {
				this.$http.get(route+urlGallineros + '/' + id).then
				(function(response){
					console.log(response);
					this.status_g=response.data.status;

					if (this.status_g == 1)	
				 			this.status_g=0;
						else	
				 			this.status_g=1;
				 	var gallinero={						  
						  status:this.status_g,
						  variable:"ok"
						};
					
			 		this.$http.patch(route+urlGallineros + '/' + id,gallinero).then
					(function(response){
						console.log(response);
						this.Confirmacion("El galpon ha sido creado exitosamente");
						this.Vacio();
						location.reload();
					});

				});
			},


		

			Vacio:function(){
				//Galpones
				this.idgalpon='';
				this.fecha='';
				this.idgallinero='';				
				this.descripcion='';
				
				this.idmeta='';
				
				//Metas
				this.metas=[];
				this.idmeta='';
				this.fecha_inicio='';
				this.fecha_fin='';
				this.observacion='';
				this.idproducto='12344431';
				this.total='';
				this.status='';			 

				//Gallinero
				this.Mnombre='';
				this.Mcantidad='';
				this.nombre="";
				
				this.status_g="";
				


			 //Ventana Modal
					
			}
	



	},//FIN DEL Mehthods


computed:{
	

		
	},//Fin del computed
});
}
window.onload=init;
Vue.config.devtools = true;