
<html>
<head>
 <TITLE> Formulario HTML SEM JavaScript </TITLE> 
</HEAD>
<BODY bgcolor="Silver">  
 
<FORM ACTION="mailto:test@gmail.com" METHOD="POST" ENCTYPE="text/plain" NAME="casdastro">
<p>Por favor,preencha os compos abaixo e depois clique no botao Enviar.Caso necessite apagar os dados,de um clique no botao limpar.<br> Muito Obrigado!
<br><br><br><p>
<b>Nome Completo<b>:<INPUT  TYPE="TEXT" NAME="nome"  SIZE="35"><!--aqui eu posso botar comentarios-->
Seu e-mail:   <INPUT TYPE="TEXT=" email  SIZE="35" ><BR>
Sexo:<br>
<INPUT  TYPE="RADIO"   NAME="sexo"  value="f"> Feminino <br>
<INPUT  TYPE="RADIO"   NAME="sexo"  value="m"> Masculino<br><br>
Estado Civil:<br>
<INPUT  TYPE="RADIO"   NAME="civil"  value="a"> Solteiro <br>
<INPUT  TYPE="RADIO"   NAME="civil"  value="c"> Casado <br>
<INPUT  TYPE="RADIO"   NAME="civil"  value="e"> Enrolado <br><br>
Bens que possui:<br>
<INPUT TYPE="CHECKBOX" NAME="bens" value="c">  Casa <br>
<INPUT TYPE="CHECKBOX" NAME="bens" value="a">  Automovelvel<br>
<INPUT TYPE="CHECKBOX" NAME="bens" value="m">  Moto <br><br>
 Faixa de idade: <SELECT NAME="faixaidade">
<OPTION VALUE="3a10"> 3 a 10 anos
<OPTION VALUE="11a 25"> 11 a 25 anos
<OPTION VALUE="26a35"> 26 a 35  anos
<OPTION VALUE="36a55">  36 a 55 anos
<OPTION VALUE="56a90"> 56 a 90  anos
</SELECT>
Hobby preferido: <SELECT NAME="Hobby">
<OPTION VALUE="Livros"> ler Livros
<OPTION VALUE="musica"> Ouvir Musica
<OPTION VALUE="cinema"> Assistir Filmes
<OPTION VALUE="esporte"> Participar Esportes
<OPTION VALUE="games"> Jogar Games
</SELECT><BR><BR>
Observacoes Gerais:<br>
<TEXTAREA NAME="observacoes"  ROWS="5" COLS="60"></TEXTAREA><BR><br>
<INPUT TYPE="SUBMIT"  VALUE="Enviar os dados">
<INPUT TYPE="RESET"   VALUE="Limpar  os dados">

</FORM>
</BODY>
</HTML>


