<html>
<head>
<title>Unimed</title>
<link rel="stylesheet"  href="./styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<meta charset="UTF-8" lang="pt-br">
</head>
<body class="" style="background-color: #181A1B; text-align: center; overflow-y: hidden; overflow-x: hidden;
    -ms-user-select: none;  user-select: none; background-image: url('uppv2.png'); 
    background-size: cover; height: 100vh; padding:0; margin:0;">
        <br>
        <div class="cabecalho animate__animated animate__lightSpeedInLeft">
        <img class="cabecalho_img"src="unimed.png">
       </div>
<br><br><br>

<div class="box">
		<a id="form1" class="button" href="#divOne">Calculo do Plano Individual</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Insira os dados</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form method="POST" action=#>
						<label style="color: black;">Nome: </label>
						<input type="text" name="nome" placeholder="Seu Nome" type="text">
						<label style="color: black;">Idade: </label>
						<input type="number" name="idade" placeholder="Sua Idade" type="text">
                        <label style="color: black;">Categoria do Plano: </label>
						<select name="categoria" id="cat">
                        <option value="enfermaria">Enfermaria</option>
                        <option value="apartamento">Apartamento</option>
                        </select>
                        <input class="button" type="submit" name="soma">

					</form>
				</div>
			</div>
		</div>
	</div>

    <br><br>

    <?php
if(isset($_POST['soma'])){

    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $categoria=$_POST['categoria'];
    $valor = 0;

    if($idade<=18 && $categoria=='enfermaria')
    {
        echo "Valor do plano enfermaria 193R$";
        $valor = 193;
    }
    if($idade<=18 && $categoria=='apartamento')
    {
        echo "Valor do plano apartamento 282R$";
        $valor = 282;
    }
    if($idade>18){
        if($idade>=19 && $idade<=23 && $categoria=='enfermaria')
        {
            echo "Valor do plano enfermaria 221R$";
            $valor = 221;
        } 

        if($idade>=19 && $idade<=23 && $categoria=='apartamento')
        {
            echo "Valor do plano apartamento 325R$";
            $valor = 325;
        }
        if($idade>=24 && $idade<=28 && $categoria=='enfermaria')
        {
            echo "Valor do plano enfermaria 255R$";
            $valor = 255;
        }
        if($idade>=24 && $idade<=28 && $categoria=='apartamento')
        {
            echo "Valor do plano apartamento 373R$";
            $valor = 373;
        }
        if($idade>=29 && $idade<=38 && $categoria=='enfermaria')
        {
            echo "Valor do plano enfermaria 337,00$";
            $valor = 337;
        }
        if($idade>=29 && $idade<=38  && $categoria=='apartamento')
        {
            echo "Valor do plano  apartamento 494,00R$";
            $valor = 494;
        }
        if($idade>= 39 && $idade<=53 && $categoria=='enfermaria')
        {
            echo "Valor do plano enfermaria 616,00 R$";
            $valor = 616;
        }
        if($idade>= 39 && $idade<=53 && $categoria=='apartamento')
        {
            echo "Valor do plano apartamento 902,00 R$";
            $valor = 902;
        }
        if($idade>=54 && $idade<=120 && $categoria=='enfermaria')
        {
            echo "Valor do plano enfermaria 800,00 R$";
            $valor = 800;
        }
        if($idade>=54 && $idade<=120 && $categoria=='apartamento')
        {
            echo "Valor do plano apartamento 1200,00 R$";
            $valor = 1200;
        }
        if($idade>=120 && $categoria=='apartamento')
        {
            echo  "<script>alert('Não fazemos planos para fantasmas!');</script>";
        }
        if($idade>=120 && $categoria=='enfermaria')
        {
            echo  "<script>alert('Não fazemos planos para fantasmas!');</script>";
        }

    }


echo "<script>
document.getElementById('form2').removeAttribute('hidden'); 
document.getElementById('form1').addAttribute('hidden');
</script>";

}




?>

<script>
   
   function action(){
    
    let p = document.getElementById('resultadO');
    p.removeAttribute("hidden");

    jsnome = '<?=$nome?>';
    var valortotal = 0;
        var valor = 0;
        var countdeze = 0;
        var countdeza = 0;
        var countve = 0;
        var countva = 0;
        jscategoria ='<?=$categoria?>';  
       var inputq =document.querySelector("#quantidade").value
       var quantidade = parseInt(inputq)
       var inputi = document.querySelector("#idadeD").value;
       var divid;
        if(quantidade>1){
        divid = inputi.split(",");
        /* Se a quantidade de dependentes for maior que 1, vai dividir
        a string por virgulas. se não, vai so permanecer o mesmo */
        }
        else{
            divid = inputi;
        }
        for(var i = 0;i<quantidade;i++)
        {   
            document.querySelector("#nomebanco").value = jsnome;
            
           console.log(jsnome);
            var idade = parseInt(divid[i]);
            console.log(valortotal);

            if(idade<=18 && jscategoria == "enfermaria")
            {
                countdeze = 0;
                countdeze = countdeze + 1;
                valor =   193 * parseInt(countdeze);
                valortotal = valortotal + valor;
                
                document.querySelector("#resultadO").value = "R$" + valortotal + ",00";
            }
            if(idade<=18 && jscategoria == "apartamento")
            {
                countdeza = 0;
                countdeza = countdeza + 1;
                valor =  282 * parseInt(countdeza);
                
                valortotal = valortotal + valor;
                document.querySelector("#resultadO").value = "R$" + valortotal + ",00";
            }
            if(idade>18 && idade<=24 && jscategoria == "enfermaria")
            {
                countve = 0;
                countve = countve + 1 ;
                valor =  221 * parseInt(countve);
                
                valortotal = valortotal + valor;
                document.querySelector("#resultadO").value = "R$" + valortotal + ",00";

            }
            if(idade>18 && idade<=24 && jscategoria == "apartamento")
            {
                countva = 0;
                countva = countva + 1 ;
                valor =  325 * parseInt(countva);
                valortotal = valortotal + valor;
                document.querySelector("#resultadO").value = "R$" + valortotal + ",00";

            }
            if(idade>24 && jscategoria != "arroz")
            {
                alert("Os dependentes não podem ter idade maior que 24 anos !!!!")

            }

    

        }
        
        
       return(valortotal);

    
   }
   function calcular(){
    var jsvalorti = <?=$valor?>;
    var valor = action();
    var total = valor+jsvalorti;
    document.querySelector("#pagamento").value = "R$" + total + ",00";
    
    document.querySelector("#valortotbanco").value = total;
    
   }

</script>
    
<br><br><br><br>


    <div class="box">
		<a id="form2" class="button" href="#divTwo">Calculo dos Dependentes</a>
	</div>
	<div class="overlay" id="divTwo">
		<div class="wrapper">
			<h2>Insira os dados</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
                        <div class="form2">
						<label style="color: black;">Quantidade de dependentes <br> (máximo de 4) </label>
						<input type="text" id="quantidade" name="quantidade" placeholder="Dependentes" type="text">
						<label style="color: black;">Idade de cada dependente<br>(se for mais que 1, por favor separe por virgula): </label>
						<input type="text" id="idadeD" name="idadeD" placeholder="Idade Dependentes" type="text">
                        <br><br>
                        <a href="#"><input class="button" type="submit" name="teste" onclick="action()"></a>
                        </div>
             <br><br>   
					
				</div>
			</div>
		</div>
	</div>




<br><br><br>
    <input type="text" style="color: black; width: 25%; text-align: center;" id="resultadO" name="resultadO" value="" disabled = "disabled">
        
        <br><br><br>
        <br>
        <a class="button" onclick="calcular()">Ver total a ser pago (Dependentes + Valor Total)</a>
        <br><br><br>
        <input type="text" style="color: black; width: 25%; text-align: center;" id="pagamento" name="pagamento" disabled="disabled">
   <br><br>

   <form method="POST" action=#>

   <input type="hidden" display="none" value="" id="nomebanco" name="nomebanco">
   <input type="hidden" value="" name="valortotbanco" id="valortotbanco">
   <input type="submit" class="button" name="botbanco" value="Enviar">
   </form>
        
        
</body>
<?php
if(isset($_POST['botbanco'])){
$nomebanco = $_POST['nomebanco'];
$valortot = $_POST['valortotbanco'];
$data = date('d/m/y');


    $conn=new mysqli("localhost","root","","unimed");
   
    $query = "INSERT unimedsql(nome,dataade,valortotal) VALUES(?,?,?)";
    $inserir=$conn->prepare($query);
    $inserir->bind_Param("sss",$nomebanco,$data,$valortot);
    $inserir->execute();
    if (mysqli_connect_errno()) {
        echo "AAA";
        exit();
    }
}
?>

</html>