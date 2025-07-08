<?php
// simple string search example

// fake DB
$notes = [
    [
        'id' => 1,
        'title' => "DS notes",
        'body' => "Body of note 1",
        'createdAt' => "2025-06-24"
    ],
    [
        'id' => 2,
        'title' => "PHP notes",
        'body' => "Body of note 2",
        'createdAt' => "2025-06-24"
    ],
    [
        'id' => 3,
        'title' => "JS notes",
        'body' => "Body of note 3",
        'createdAt' => "2025-06-24"
    ],
];

$getUserSearchTerm = $_GET['title'] ?? '';

function searchNotesFilterBy($notes, $getUserSearchTerm) {
    foreach ($notes as $note) {
        if($note['title'] === $getUserSearchTerm) {
            return $note['title'];
        }
    }

    return "No result found";
        
}

var_dump(searchNotesFilterBy($notes, $getUserSearchTerm));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>

<style> 

form {
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>

<form action="" method="get">
    <input type="text" name="title" id="title" value="<?= $getUserSearchTerm ?>">
    <button type="submit">search notes</button>
</form>
    
</body>
</html>