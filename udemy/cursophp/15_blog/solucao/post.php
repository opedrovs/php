<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sunt fugit cum similique autem officia eos? Veritatis, reiciendis exercitationem! Sed aut animi iusto maiores assumenda nihil optio obcaecati rerum non.
            Aspernatur dolor quasi soluta quaerat totam exercitationem excepturi porro nemo, rem doloribus voluptate repellendus sint dolorem aliquam sunt perspiciatis ullam facere modi assumenda nulla odit illum magnam. Magni, facilis placeat?
            Rerum aliquam corporis reiciendis magni veniam quos eum enim tenetur rem quibusdam accusantium, atque a quaerat doloremque quas soluta! Consequatur quo illo sequi nisi doloremque, tempora fugiat officiis tenetur cupiditate!
            Excepturi culpa suscipit assumenda beatae molestiae aspernatur temporibus vel. Vitae tenetur animi quasi rerum blanditiis doloremque veritatis amet facere! Porro repellat, repudiandae fugit nesciunt id dolorem eum maxime cum corporis.
            Reprehenderit maiores qui asperiores quibusdam incidunt! Molestiae eveniet doloribus odio veniam, maiores enim quos provident illum quidem quia libero culpa, nulla nam consequatur cum consectetur temporibus labore facere tempora magni?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sunt fugit cum similique autem officia eos? Veritatis, reiciendis exercitationem! Sed aut animi iusto maiores assumenda nihil optio obcaecati rerum non.
            Aspernatur dolor quasi soluta quaerat totam exercitationem excepturi porro nemo, rem doloribus voluptate repellendus sint dolorem aliquam sunt perspiciatis ullam facere modi assumenda nulla odit illum magnam. Magni, facilis placeat?
            Rerum aliquam corporis reiciendis magni veniam quos eum enim tenetur rem quibusdam accusantium, atque a quaerat doloremque quas soluta! Consequatur quo illo sequi nisi doloremque, tempora fugiat officiis tenetur cupiditate!
            Excepturi culpa suscipit assumenda beatae molestiae aspernatur temporibus vel. Vitae tenetur animi quasi rerum blanditiis doloremque veritatis amet facere! Porro repellat, repudiandae fugit nesciunt id dolorem eum maxime cum corporis.
            Reprehenderit maiores qui asperiores quibusdam incidunt! Molestiae eveniet doloribus odio veniam, maiores enim quos provident illum quidem quia libero culpa, nulla nam consequatur cum consectetur temporibus labore facere tempora magni?</p>
        </div>
        
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>


<?php 
    include_once("templates/footer.php");
?>