<?php 
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once("view/templates/menu.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP - Proyecto Final</title>

    <?php include('view/templates/head.php'); ?>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <?= menu_bs('p'); ?>
    </header>

    <div class="imagen">        
        <div class="texto-imagen text-center w-100 text-uppercase fw-bold">
            <p>PHP</p>
            <?php 
                if(isset($_SESSION['name']) && $_SESSION['name']) {
                    echo '<h1 class="text-info">Bienvenido '.$_SESSION['name'].'</h1>';
                }
            ?>
        </div>
        <img src="https://picsum.photos/id/0/1366/400" alt="" srcset="">
    </div>

    <section>
        <div class="texto">
            <article id="historia">
                <h1 class="titulo">Nuestra Historia</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus odio quisquam recusandae voluptatum ullam ipsa neque at quis numquam, quae enim. Autem maiores
                    exercitationem similique, odit, earum sed, recusandae minus quis laboriosam pariatur error numquam magni ullam iste aperiam maxime necessitatibus ex quas. Doloribus,
                    incidunt? Voluptatum enim at fugit reiciendis? Voluptas adipisci corrupti sequi, quidem perspiciatis sapiente. Ipsam ratione, corrupti et tenetur quo rerum velit ea
                    iure eos odio ipsum dolor, accusantium facilis soluta perferendis nostrum sit temporibus porro fugiat ad laboriosam consequuntur vero alias placeat. Dignissimos,
                    doloribus quibusdam. Eligendi, inventore quis, non sed consequatur repellendus officiis blanditiis ad voluptatum impedit cum dolorem commodi sequi deleniti ut aliquam
                    similique? Iste unde ipsum harum dolorum sequi facilis, placeat quaerat deleniti fugiat.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, labore laborum natus repellendus odit dolores, eius earum officiis, ratione itaque magnam. Soluta nisi
                    saepe temporibus reiciendis, itaque expedita quas omnis tempore nulla, optio, consequatur repellendus! Iusto, exercitationem delectus, molestias, eaque laudantium
                    maxime maiores ducimus ab quis pariatur adipisci mollitia dolores rerum natus veniam cupiditate. Blanditiis mollitia ratione repellat, similique laborum, esse ad labore
                    fugiat ea expedita tempora sunt reiciendis placeat illum nihil repellendus magni impedit, quos asperiores dignissimos molestiae sint!
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas nemo suscipit eligendi placeat impedit vero quasi consequuntur saepe voluptas at, quos commodi nihil
                    minus repellendus quibusdam harum numquam ratione esse atque. Sapiente corporis placeat reiciendis quam incidunt delectus eveniet! Velit quo dolores voluptates sapiente
                    quas officia obcaecati, dolore maxime iste illum porro expedita distinctio vero eius officiis provident iure! Repudiandae natus eligendi nobis ducimus, fugiat nihil
                    maxime reiciendis quod velit hic! Aliquam est consectetur, tenetur recusandae doloribus corporis tempora saepe dicta obcaecati, dolorum temporibus laudantium sunt quod,
                    autem vero? Animi eaque pariatur sed cupiditate quia? Mollitia quo minus possimus amet harum, reiciendis sapiente ipsam nesciunt! A maxime dicta placeat illo, saepe
                    dignissimos. Officiis soluta molestias odit atque aut accusantium, neque saepe hic et dolores, obcaecati qui ab nesciunt sint nihil est. Voluptatum, eius provident
                    quasi in ad doloribus totam consequatur quam, sit soluta ea corporis nobis ratione sequi! Deleniti alias quaerat ea explicabo amet praesentium ipsam, consequatur in
                    omnis quas, accusantium illo blanditiis iure excepturi nemo molestiae. Illum itaque tempore ipsum placeat quaerat possimus similique architecto, esse error accusamus
                    veritatis. Deserunt, odit aliquam nostrum ipsum natus ratione ea tenetur aliquid molestias officia sapiente enim ut? Autem rerum amet, commodi minus molestiae, omnis
                    nesciunt reiciendis culpa tenetur deserunt corrupti! Eveniet ullam omnis repellendus delectus suscipit vel esse harum quae doloremque labore itaque quas tempore
                    provident eligendi impedit odit error modi beatae enim cumque, quos quibusdam adipisci voluptate. Fugit iusto quis aut sint dignissimos sapiente velit molestiae et
                    aliquam, tempora atque itaque!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat non modi dicta obcaecati quos placeat dolorum voluptas, fuga nulla omnis aspernatur ut labore ratione
                    sint pariatur commodi in sunt ad illum! Facilis impedit dolor repellat quisquam atque. Quod, repellat quae?
                </p>
            </article>
            <article id="mision">
                <h1 class="titulo">Nuestra Misión</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, facilis? Excepturi, dolore impedit laudantium nesciunt libero iure facilis. Recusandae in libero,
                    consequatur porro magnam eum maxime culpa nulla adipisci, laborum accusantium assumenda illo voluptate nisi voluptates ipsum aut iusto incidunt molestias voluptas?
                    Dolorum consequuntur impedit quam quos excepturi quaerat. Quibusdam saepe non cupiditate dolores illo placeat, deserunt consectetur culpa minus dolor quis labore a
                    laboriosam! Dolores corrupti iste at sed provident! Quaerat architecto consequuntur quia error earum doloribus et quisquam sint asperiores quam corporis accusantium
                    mollitia nesciunt harum in, minus hic vero ratione ducimus impedit est! Facere perspiciatis sunt provident, repellendus beatae neque aliquam corrupti doloremque fugiat,
                    asperiores eos eligendi velit illum quaerat, sint quae nobis eaque et labore. Suscipit, laboriosam quisquam maxime beatae iusto explicabo quidem sit? Consequuntur nihil
                    voluptate temporibus, similique sapiente laudantium, sint nesciunt eveniet debitis cum exercitationem id aspernatur reiciendis molestiae voluptas doloribus iusto,
                    labore aut vitae architecto facilis nostrum? Et, recusandae explicabo. Velit pariatur distinctio, tempora nemo, tenetur eligendi nihil rerum enim reprehenderit sequi,
                    optio assumenda beatae quasi minus expedita aperiam harum laudantium dolorum officia.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat non modi dicta obcaecati quos placeat dolorum voluptas, fuga nulla omnis aspernatur ut labore ratione
                    sint pariatur commodi in sunt ad illum! Facilis impedit dolor repellat quisquam atque. Quod, repellat quae?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus odio quisquam recusandae voluptatum ullam ipsa neque at quis numquam, quae enim. Autem maiores
                    exercitationem similique, odit, earum sed, recusandae minus quis laboriosam pariatur error numquam magni ullam iste aperiam maxime necessitatibus ex quas. Doloribus,
                    incidunt? Voluptatum enim at fugit reiciendis? Voluptas adipisci corrupti sequi, quidem perspiciatis sapiente. Ipsam ratione, corrupti et tenetur quo rerum velit ea
                    iure eos odio ipsum dolor, accusantium facilis soluta perferendis nostrum sit temporibus porro fugiat ad laboriosam consequuntur vero alias placeat. Dignissimos,
                    doloribus quibusdam. Eligendi, inventore quis, non sed consequatur repellendus officiis blanditiis ad voluptatum impedit cum dolorem commodi sequi deleniti ut aliquam
                    similique? Iste unde ipsum harum dolorum sequi facilis, placeat quaerat deleniti fugiat.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas nemo suscipit eligendi placeat impedit vero quasi consequuntur saepe voluptas at, quos commodi nihil
                    minus repellendus quibusdam harum numquam ratione esse atque. Sapiente corporis placeat reiciendis quam incidunt delectus eveniet! Velit quo dolores voluptates sapiente
                    quas officia obcaecati, dolore maxime iste illum porro expedita distinctio vero eius officiis provident iure! Repudiandae natus eligendi nobis ducimus, fugiat nihil
                    maxime reiciendis quod velit hic! Aliquam est consectetur, tenetur recusandae doloribus corporis tempora saepe dicta obcaecati, dolorum temporibus laudantium sunt quod,
                    autem vero? Animi eaque pariatur sed cupiditate quia? Mollitia quo minus possimus amet harum, reiciendis sapiente ipsam nesciunt! A maxime dicta placeat illo, saepe
                    dignissimos. Officiis soluta molestias odit atque aut accusantium, neque saepe hic et dolores, obcaecati qui ab nesciunt sint nihil est. Voluptatum, eius provident
                    quasi in ad doloribus totam consequatur quam, sit soluta ea corporis nobis ratione sequi! Deleniti alias quaerat ea explicabo amet praesentium ipsam, consequatur in
                    omnis quas, accusantium illo blanditiis iure excepturi nemo molestiae. Illum itaque tempore ipsum placeat quaerat possimus similique architecto, esse error accusamus
                    veritatis. Deserunt, odit aliquam nostrum ipsum natus ratione ea tenetur aliquid molestias officia sapiente enim ut? Autem rerum amet, commodi minus molestiae, omnis
                    nesciunt reiciendis culpa tenetur deserunt corrupti! Eveniet ullam omnis repellendus delectus suscipit vel esse harum quae doloremque labore itaque quas tempore
                    provident eligendi impedit odit error modi beatae enim cumque, quos quibusdam adipisci voluptate. Fugit iusto quis aut sint dignissimos sapiente velit molestiae et
                    aliquam, tempora atque itaque!
                </p>
            </article>
        </div>
    </section>

    <div class="modal fade" id="mensaje" tabindex="-1" aria-labelledby="mensajeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="mensaje-header" class="modal-header bg-dark text-light">
                    <h5 class="modal-title" id="mensajeLabel">¡Información!</h5>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p><strong>Registrate!</strong> para loguearte o utilza los siguientes datos:</p>                    
                    <div>Usuario: prueba@prueba.com</div>
                    <div>Contraseña: Prueba123</div>                    
                </div>
                <div class="modal-footer bg-dark text-light">
                    <input type="checkbox" name="mostrar" id="mostrar">
                    <label for="mostrar">No volver a mostrar</label>
                </div>
            </div>
        </div>
    </div>
    <?php include('view/templates/footer.php'); ?>
    <?php include('view/templates/scripts.php'); ?>
    <script>
        <?php if(!isset($_SESSION['user'])) { ?>            
            if (!localStorage.getItem('mostrar') || localStorage.getItem('mostrar') == '1' ) {
                let myModal = new bootstrap.Modal(document.getElementById("mensaje"))
                myModal.show()
            }

            document.getElementById('mostrar').addEventListener('click', e => {
                if (e.target.checked) {
                    localStorage.setItem('mostrar', '0')
                } else {
                    localStorage.setItem('mostrar', '1')
                }
            })
        <?php 
            }
        ?>
    </script>
</body>

</html>