function init()
{
	var	route = document.querySelector("[name=route]").value;
	var urlEmpresa='/apiEmpresa';


new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#apiEmpresa',

	created:function()
	{
		$('#ventana_modal').modal('show');

	},

	data:{

		rfc:'',
		nombre:'',
		mision:'',
		vision:'',
		valores:'',
		historia:'',
		telefono:'',
		instagram:'',
		facebook:'',
		email:'',
		direccion:'',
		sobre_nosotros:'',
		status:'',

		Aux_rfc:'',
		editando:false,
		testerEmpresa:[],


	},

	methods:{
		
		/*f:function(){
			
			if (this.editando==false){
				this.editando=true;
				$('#ventana_modal').modal('hide');}
			else if(this.editando==true){
				this.editando=false;
				$('#ventana_modal').modal('show');
			}

			console.log(this.editando);
		},

		showModal:function(){$('#ventana_modal').modal('show');},

		hideModal:function(){$('#ventana_modal').modal('hide');},*/

	
		
		
		agregarEmpresa:function(){

				var empresa={rfc:this.rfc}
				
			if (empresa.rfc){
					this.$http.post(route+urlEmpresa,empresa).then
					(function(response){
					console.log(response);
					this.editando=true;
				 });
			   }
			   else
			   		alert('Ingresa un rfc');
			
			},


			editEmpresa:function(id){
				this.$http.get(route+urlEmpresa + '/' + id).then
				(function(response){
						console.log(response);
					this.editando=true;

					this.testerEmpresa=response.data;
					if (this.testerEmpresa) {
						
						this.nombre=response.data.nombre;
				     	this.mision=response.data.mision;
				     	this.vision=response.data.vision;
				     	this.valores=response.data.valores;
				     	this.historia=response.data.historia;
				     	this.telefono=response.data.telefono;
				     	this.instagram=response.data.instagram;
				     	this.facebook=response.data.facebook;
				     	this.email=response.data.email;
				     	this.direccion=response.data.direccion;
				     	this.sobre_nosotros=response.data.sobre_nosotros;


						this.Aux_rfc=response.data.rfc

						
					}
					else
						alert('Ninguna busqueda coincide');

					});


			},
		

			updateEmpresa:function(id){
				
			var empresa={
				     nombre:this.nombre,
				     mision:this.mision,
				     vision:this.vision,
				     valores:this.valores,
				     historia:this.historia,
				     telefono:this.telefono,
				     instagram:this.instagram,
				     facebook:this.facebook,
				     email:this.email,
				     direccion:this.direccion,
				     sobre_nosotros:this.sobre_nosotros

			        }

			
				this.$http.patch(route+urlEmpresa + '/' + id,empresa).then
				(function(response){
					console.log(response);
					
					this.editando=false;
					this.rfc='';
					
								
				});

			},

			Vacio:function()
			{
				this.testerEmpresa='';
				this.rfc='';
				this.nombre='';
				this.mision='';
				this.vision='';
				this.valores='';
				this.historia='';
				this.telefono='';
				this.instagram='';
				this.facebook='';
				this.email='';
				this.status='';
				this.direccion='';
				this.sobre_nosotros='';
			}

		    

		   

		


	},//FIN DEL Mehthods


computed:{
		


	}



});
}
window.onload=init;
Vue.config.devtools = true;