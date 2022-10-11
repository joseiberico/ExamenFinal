   document.addEventListener('DOMContentLoaded', function(){
        iniciar();
        })
        
        function iniciar(){
            obtenerDepartamentos();
        }
        
        async function obtenerDepartamentos(){
            const url = "data/ListarDepa.php?accion=listar";
         
           
          
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();
            if(resultado.codigo === 200){
                const data = resultado.data;
                let html = "";
                data.forEach(Departamentos =>{
                    html += "<tr>";
                    html += "<td>" + Departamentos.id + "</td>";
                    html += "<td>" + Departamentos.titulo + "</td>";
                    html += "<td>" + Departamentos.precio + "</td>";
                    html += "<td>" + Departamentos.descripcion+ "</td>";
                    html += "<td>" + Departamentos.habitaciones + "</td>";
                    html += "<td>" + Departamentos.estacionamiento + "</td>";
                    html += "</tr>";
                });
        
                const tabla = document.querySelector("#tblDatos");
                tabla.innerHTML = html
                //console.log(html);
            }
        }