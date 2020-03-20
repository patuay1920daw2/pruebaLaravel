<html>
    <form method="GET" action="{{route('programaStore')}}">
        <p>Nombre del Programa: <input type="text" name="namePrograma"></p>
        <p>descripcio del Programa: <input type="texto" name="descripcio"></p>
        <p>Tipo del Programa: 
        <select name="tipo">
            <option value="DEPORTIVO">DEPORTIVO</option>
            <option value="RECREACION">RECREACION</option>
            <option value="ENTRETEIMIENTO">ENTRETEIMIENTO</option>
        </select></p>
        <p>clasificaciondel Programa: 
        <select name="clasificacion">
            <option value="Todo_Publico">Todo Publico</option>
            <option value="+3">+3</option>
            <option value="+7">+7</option>
            <option value="+13">+13</option>
            <option value="+18">+18</option>
        </select></p>
        <p>id del Canal: <input type="number" name="idCanal"></p>
        <input type="submit" value="Enviar">
    </form>
</html>