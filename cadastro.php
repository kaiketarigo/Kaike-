<!DOCTYPE html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<title>Conecte-se</title>
<link rel="icon" type="image/png" sizes="32x32" href="imagens/icone.png">
</head>
<body>

<div>
<div id="div1">
        <label>CONECTE-SE</label>        
        <br>
        <form1>
          <label for="email"></label> 
          <br>
          <input type="email" id="email" name="email" class="email" placeholder="email" ><br><br>    
        </form>
        <form>
            <label for="password"></label>            
            <input type="password" id="password" name="password" class="senha" placeholder="senha" >
            <input type="submit" value="Entrar">
          </form>      
		  </div> 
		  
	<div id="div2">
	<label2>CADASTRE-SE</label2>
        <br>
        <form>
            <label for="name"></label> 
            
            <input type="text" id="name" name="name"  size="40" style="height: 25px;;" class="nome" placeholder="nome" >
            
          </form>
          <br>
        
          <form>
            <label for="phone"></label>
            <input 15 type="tel" id="phone" name="phone" size="40" style="height: 25px;;" class="celular" placeholder="celular"
            
            pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
            <small>Formato: 51 99456-7890</small>          
          </form>  
        <form>
            <label for="password"> </label>
            <br>
            <input type="password" id="password" size="40" style="height: 25px;;" class="senhaC" name="password" placeholder="senha">           
        </form>
        <label for="password"> </label>
            <br>
            <input type="password" id="password" size="40" style="height: 25px;;" class="senhaC" name="password" placeholder="confirme sua senha">           
        </form>
        <br>
     
        <form method="get" action=".">
          <label><br>
          <input name="cep" type="text" id="cep" placeholder="cep" size="40" style="height: 25px;;"  maxlength="9"
                 onblur="pesquisacep(this.value);" /></label>
          <label><br>
          <input name="rua" type="text" id="rua" placeholder="rua"  size="40" style="height: 25px;;" /></label><br />
          <label><br>
          <input name="bairro" type="text" id="bairro" placeholder="bairro" size="40" style="height: 25px;;" ></label><br/>
          <label><br>
          <input name="cidade" type="text" id="cidade" placeholder="cidade"  size="40" style="height: 25px;;" ></label><br />
          <label><br>
          <input name="uf" type="text" id="uf" size="2"placeholder="estado" style="height: 25px;;" > </label>
        
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" value="Entrar">
        </form><br>
        
		  
          
		  <div>
        <script>
    
          function limpa_formul??rio_cep() {
                  //Limpa valores do formul??rio de cep.
                  document.getElementById('rua').value=("");
                  document.getElementById('bairro').value=("");
                  document.getElementById('cidade').value=("");
                  document.getElementById('uf').value=("");
                  
          }
      
          function meu_callback(conteudo) {
              if (!("erro" in conteudo)) {
                  //Atualiza os campos com os valores.
                  document.getElementById('rua').value=(conteudo.logradouro);
                  document.getElementById('bairro').value=(conteudo.bairro);
                  document.getElementById('cidade').value=(conteudo.localidade);
                  document.getElementById('uf').value=(conteudo.uf);
                 
              } //end if.
              else {
                  //CEP n??o Encontrado.
                  limpa_formul??rio_cep();
                  alert("CEP n??o encontrado.");
              }
          }
              
          function pesquisacep(valor) {
      
              //Nova vari??vel "cep" somente com d??gitos.
              var cep = valor.replace(/\D/g, '');
      
              //Verifica se campo cep possui valor informado.
              if (cep != "") {
      
                  //Express??o regular para validar o CEP.
                  var validacep = /^[0-9]{8}$/;
      
                  //Valida o formato do CEP.
                  if(validacep.test(cep)) {
      
                      //Preenche os campos com "..." enquanto consulta webservice.
                      document.getElementById('rua').value="...";
                      document.getElementById('bairro').value="...";
                      document.getElementById('cidade').value="...";
                      document.getElementById('uf').value="...";
                      
      
                      //Cria um elemento javascript.
                      var script = document.createElement('script');
      
                      //Sincroniza com o callback.
                      script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
      
                      //Insere script no documento e carrega o conte??do.
                      document.body.appendChild(script);
      
                  } //end if.
                  else {
                      //cep ?? inv??lido.
                      limpa_formul??rio_cep();
                      alert("Formato de CEP inv??lido.");
                  }
              } //end if.
              else {
                  //cep sem valor, limpa formul??rio.
                  limpa_formul??rio_cep();
              }
          };
          

          <? 

$nome= $_POST {"name"};
$tel= $_POST ["phone"];
$email= $_POST ["email"];


$endereco= $_POST ["endereco"];
$cidade= $_POST ["cidade"];
$estado= $_POST ["estado"];
$bairro = $_POST ["bairro"];
$pais= $_POST ["pais"];
$login= $_POST ["login"];
$senha= $_POST ["senha"];
$news= $_POST ["news"];
$sexo= $_POST ["sexo"];


@$conexao = @mysqli_connect("localhost","root");
if (!@$conexao) {
die ("Erro de conex??o com localhost, o seguinte erro ocorreu -> ".mysqli_error());
}

@$banco = @mysqli_select_db("clientes",$conexao);
if (!$banco){
die ("Erro de conex??o com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());
}


@$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endere??o` , `cidade` , `estado` , `bairro` , `pa??s` , `login` , `senha` , `news` , `id` )
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";
@mysqli_query(@$query,@$conexao);

echo "Seu cadastro foi realizado com sucesso!Agradecemos a aten????o.";

@$query_ver_sql = mysqli_query("SELECT `login` FROM `clientes` WHERE `login` = '$login'");

@$query_ver= mysqli_num_rows($query_ver_sql);

if($query_ver>0){
echo "Este login j?? esta em uso";
} else {
echo "Esta login n??o esta em uso";
}

?>

          </script>


		  
		  </body>
		  </html>