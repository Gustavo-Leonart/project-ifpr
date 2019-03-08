<?php
    $conexao = new mysqli("localhost", "root", "", "banco");
    $db = @mysqli_select_db("banco", $conexao);
    $id_pedido = $_GET['id_pedido'];
    $sql = mysqli_query($conexao,
        "SELECT
           *, DATE_FORMAT(data_entrega, '%d/%m/%Y') as data_entrega
           FROM pedido WHERE id_pedido = '".$_GET['id_pedido']."' ");
   $row = mysqli_fetch_array($sql);

   $encomenda     = $row['des_receita'];
   $data_entrega  = $row['data_entrega'];
   $status_pedido = $row['status_pedido'];
?>
<div class="container pedido">
    <form class="form__produtos" name="form__produtos" action="agendamento.php" method="post">
        <div class="fields__container">
            <h4>Edição de Pedidos</h4>
            <div class="form-group block__fields">
                <label name="cliente" class="fields__title">Encomenda</label>

                <select class = "form-control" name="cliente" value="<?php echo $row["id_menu"]; ?>" required>
                <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
            </select>
            </div>
            <div class="form-group block__fields">
                <label name="dtaEnt" class="fields__title">Data da Entrega</label>
                <input class="form-control" type="date" value="<?php echo $row["data_entrega"]; ?>" required>
            </div>
            <div class="form-group block__fields">
                <label name="qtde" class="fields__title">Status do Pedido</label>
                <select class="form-control" >
                    <option class="active" value="<?php echo $row["status_pedido"]; ?>"></option>
                    <option value="0">Aguardando entrega</option>
                    <option value="1">Pedido entregue</option>
                    <option value="2">Pedido em andamento</option>
                </select>
            </div>
            <button class="btn__submit" type="submit" name="button">Salvar</button>
        </div>
        <?php if(isset($_GET['valida'])){
          $valida = $_GET['valida'];
          echo "<div class=\"alert alert-success\">
                    Pedido cadastrado com <strong>sucesso</strong>!
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                </div>";
        } ?>
    </form>
</div>
