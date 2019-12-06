<?php
 require '../include/class/categoriesclass.php';

 $classCategories = new CategoriesClass($pdo);
 $categories = $classCategories->newCategories();

?>

<style>
    .uk-button-default{
        color:white;
        border-radius:20px;
    }  
    .uk-button-default:hover{
        background-color:white;
        transition: all 0.35s ease;
        font-family:'Poppins', sans-serif;
    }
</style>

<p uk-margin align="center">
            <a class="uk-button uk-button-default uk-width-1-3" href="#modal-group-1" uk-toggle
                >Create Category</a>
            <a class="uk-button uk-button-default uk-width-1-3" href="#modal-group-2" uk-toggle
                >Upload Song</a>
        </p>

        <div id="modal-group-1" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title">Create Category</h2>
                </div>
                <div class="uk-modal-body">
                    <form action="../include/action/add-categories.php" method="post">
                        <p>Name Of Category</p>
                        <input type="text" name="category" class="uk-input">
                    
                </div>
                <div class="uk-modal-footer uk-text-right">

                    <button class="uk-button uk-button-primary"  type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>

        <div id="modal-group-2" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title">Upload Song</h2>
                </div>
                <div class="uk-modal-body">
                    <form action="../include/action/add-songs.php" method="post" enctype="multipart/form-data">
                        <p>Name Of Song</p>
                        <input type="text" class="uk-input" name="name">
                        <p>File Song</p>
                        <input type="file" class="uk-input" name="file">
                        <p>Cover Photo</p>
                        <input type="file" class="uk-input" name="cover">
                        <p>Name Of Artist</p>
                        <input type="text" class="uk-input" name="artist">
                        <p>Select Category</p>
                        <select name="category_id" placeholder="Select Date" class="uk-select">
                        <?php 
                            $i = 1;
                            if ($categories):
                                foreach ($categories as $data):
                        ?>
                            <option value="<?php echo   $data->id; ?>"><?php echo  $data->nama; ?></option>
                        <?php
                                endforeach;
                            endif;
                        ?>
                        </select>
                    
                </div>
                <div class="uk-modal-footer uk-text-right">

                <button class="uk-button uk-button-primary"  type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
