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

    <main class="post-container">
        <div class="post-content">
            <h2 class="post-title"><?= $currentPost['title'] ?></h2>
            <p class="post-description"><?= $currentPost['description'] ?></p>
            <img src="./img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" class="post-image">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi atque, earum aut voluptate nam optio fugit, dolore necessitatibus doloribus repudiandae laborum possimus beatae labore porro corrupti vero hic tempore sit.
            Minus fugit nobis ducimus repellendus magni eos ab nam. At quibusdam numquam sit, fugiat perspiciatis amet! Ea, voluptatem accusamus earum animi maiores totam, quam iste, repudiandae necessitatibus pariatur quos inventore.
            Vero qui quod placeat. Optio beatae sit aspernatur veniam commodi maxime doloremque blanditiis neque? Ipsum cupiditate ab dolore, ex maiores quae. Quos voluptatibus eos est quaerat aliquid perspiciatis similique odio?
            Ipsam facilis, exercitationem blanditiis ex dicta voluptas quae consequuntur ducimus nesciunt nostrum dolorem molestias consequatur laboriosam optio possimus excepturi eveniet ratione similique voluptatum perferendis odit illo, suscipit accusamus rerum. Dolorem!
            Maiores exercitationem veritatis ipsum repellat voluptates quisquam aliquid, amet voluptas reprehenderit ullam corporis quas iste nesciunt dicta sed enim consequuntur explicabo non fuga deleniti rem omnis repudiandae quae? Sit, ducimus!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi atque, earum aut voluptate nam optio fugit, dolore necessitatibus doloribus repudiandae laborum possimus beatae labore porro corrupti vero hic tempore sit.
            Minus fugit nobis ducimus repellendus magni eos ab nam. At quibusdam numquam sit, fugiat perspiciatis amet! Ea, voluptatem accusamus earum animi maiores totam, quam iste, repudiandae necessitatibus pariatur quos inventore.
            Vero qui quod placeat. Optio beatae sit aspernatur veniam commodi maxime doloremque blanditiis neque? Ipsum cupiditate ab dolore, ex maiores quae. Quos voluptatibus eos est quaerat aliquid perspiciatis similique odio?
            Ipsam facilis, exercitationem blanditiis ex dicta voluptas quae consequuntur ducimus nesciunt nostrum dolorem molestias consequatur laboriosam optio possimus excepturi eveniet ratione similique voluptatum perferendis odit illo, suscipit accusamus rerum. Dolorem!
            Maiores exercitationem veritatis ipsum repellat voluptates quisquam aliquid, amet voluptas reprehenderit ullam corporis quas iste nesciunt dicta sed enim consequuntur explicabo non fuga deleniti rem omnis repudiandae quae? Sit, ducimus!</p>
        </div>
            
        <aside class="nav-container">
            <h3 class="tags-title">Tags</h3>
            <ul class="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>

            <h3 class="categories-title">Categorias</h3>
            <ul class="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php 
    include_once("templates/footer.php");
?>