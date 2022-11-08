<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form example</title>

    <style>
    form {
        border: 1px solid blue;
        margin: 1rem 0;
    }
    </style>

</head>
<body>

    <form action="" method="GET">
        <input type="hidden" name="sent" value="1">

        <p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= @ $_GET['name'] ?>">
        </p>

        <p>
            Address:
            <input type="text" name="address" value="<?= $_GET['address'] ?? '' ?>">
        </p>

        <p>
            <label>
                <input type="checkbox" name="tos"
                    <?= @ $_GET['tos'] == 'on' ? 'checked' : '' ?>
                > 
                TOS agreement
            </label>
        </p>


        <p>
            Giới tính:
            <label>
                <input type="radio" name="gender" value="male"
                <?= @ $_GET['gender'] == 'male' ? 'checked' : '' ?>
                > 
                Nam
            </label>
            <label>
                <input type="radio" name="gender" value="female"
                <?= @ $_GET['gender'] == 'female' ? 'checked' : '' ?>
                >  
                Nữ
            </label>
            <label>
                <input type="radio" name="gender" value="other"
                <?= @ $_GET['gender'] == 'other' ? 'checked' : '' ?>
                >
                Khác
            </label>
        </p>

        <p>
            Quốc tịch:
            <select name="nationality">
                <option value="1" <?= @ $_GET['nationality'] == 1 ? 'selected' : '' ?>>Vietnam</option>
                <option value="2" <?= @ $_GET['nationality'] == 2 ? 'selected' : '' ?>>My</option>
                <option value="3" <?= @ $_GET['nationality'] == 3 ? 'selected' : '' ?>>Lao</option>
                <option value="4" <?= @ $_GET['nationality'] == 4 ? 'selected' : '' ?>>Phap</option>
                <option value="5" <?= @ $_GET['nationality'] == 5 ? 'selected' : '' ?>>Thai Lan</option>
            </select>
        </p>

        <p>Giới thiệu:</p>
        <div>
            <textarea name="intro" cols="30" rows="10"><?= @ $_GET['intro'] ?></textarea>
        </div>


        <p>Ngôn ngữ:</p>
        <p>
            <label><input type="checkbox" name="langs[]" value="1"
                <?= in_array(1, $_GET['langs'] ?? []) ? 'checked' : '' ?>
            > Tiếng Anh</label>
        </p>
        <p>
            <label><input type="checkbox" name="langs[]" value="2"
                <?= in_array(2, $_GET['langs'] ?? []) ? 'checked' : '' ?>
            > Tiếng Pháp</label>
        </p>
        <p>
            <label><input type="checkbox" name="langs[]" value="3"
                <?= in_array(3, $_GET['langs'] ?? []) ? 'checked' : '' ?>
            > Tiếng Việt</label>
        </p>

        <p>Ngôn ngữ lập trình:</p>
        <p>
            <select name="prog_langs[]" multiple>
                <option value="1" <?= in_array(1, $_GET['prog_langs'] ?? []) ? 'selected' : '' ?>>C++</option>
                <option value="2" <?= in_array(2, $_GET['prog_langs'] ?? []) ? 'selected' : '' ?>>PHP</option>
                <option value="3" <?= in_array(3, $_GET['prog_langs'] ?? []) ? 'selected' : '' ?>>Java</option>
                <option value="4" <?= in_array(4, $_GET['prog_langs'] ?? []) ? 'selected' : '' ?>>Javascript</option>
            </select>
        </p>


        <button type="submit">Gửi</button>
    </form>
    
</body>
</html>