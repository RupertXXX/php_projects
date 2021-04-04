<style>
    .add_post_form{
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .add_post_form input, .add_post_form select, .add_post_form textarea{
        margin: 10px 0 10px 0;
        outline: none;
        font-size: 16px;
    }
    .add_post_form textarea{
        height: 200px;
        resize: none;
    }
    .error{
        border: 1px solid red;
        width: 100%;
        height: 5vh;
        margin: 10px 0 20px 0;
        color: red;
        font-size: 20px;
    }
</style>
<h1>Add post</h1>
<form class="add_post_form" action="/rent/postAded" method="post">
    <input name="name" type="text" placeholder="Name" />
    <input name="phone" type="text" placeholder="Phone" />
    <input name="text" type="text" placeholder="Description" />
    <select name="type" id="type">
        <option value="1">Квартира</option>
        <option value="2">Комната</option>
        <option value="3">Дом</option>
    </select>
    <input name="adress" type="text" placeholder="Address" />
    <input name="cost" type="number" placeholder="Cost" />
    <input name="email" type="text" placeholder="Email" />
    <textarea name="big_text" placeholder="Full description"></textarea>
    <?php 
        if($data) echo("");
        else echo("<div class='error_main'><div class='error'>Пожалуйста заполните поля: name, phone, description, cost</div></div>");
    ?>
    <button type="submit">Submit</button>
</form>