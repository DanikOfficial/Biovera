

<h1>Test</h1>

<table align="center">
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Dimensão</th>
                        <th>Tipologia</th>
                    </tr>
                    <?php foreach($plantas as $planta): ?>
                    <tr>
                        <td><?php echo $planta->codigo; ?></td>
                        <td><?php echo $planta->nome; ?></td>
                        <td><?php echo $planta->preco; ?></td>
                        <td><?php echo $planta->descricao; ?></td>
                        <td><?php echo $planta->dimensao; ?></td>
                        <td><?php echo $planta->tipologia; ?></td>
                       <!--
                        <td>
                            <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info"> Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class="btn btn-danger">Delete</a>

                        </td>-->
                </tr>
                    <?php endforeach; ?>
                </table>
            </div>