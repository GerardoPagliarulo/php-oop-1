<?php // CLASS MOVIE
include_once __DIR__ . '/classes/class-movie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>php-oop-1</title>
</head>
<body>
    <main class="main-content">
        <header class="title">
            MOVIE TABLE
        </header>
        <table>
            <tr class="line-h-50">
                <th>Title</th>
                <th>Director</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Runing Time</th>
                <th>Movie's age</th>
            </tr>
            <tr class="line-h-35">
                <?php $movie1 = new Movie('The Graduate', 'Mike Nichols', '1967', 'Drama', 105); ?>
                <td><?php echo $movie1->title; ?></td>
                <td><?php echo $movie1->director; ?></td>
                <td><?php echo $movie1->year; ?></td>
                <td><?php echo $movie1->genre; ?></td>
                <td><?php echo $movie1->running_time; ?>min</td>
                <td><?php echo $movie1->ageMovie(2020); ?></td>
            </tr>
            <tr class="line-h-35">
                <?php $movie2 = new Movie('Five Easy Pieces', 'Bob Rafelson', '1970', 'Drama', 96); ?>
                <td><?php echo $movie2->title; ?></td>
                <td><?php echo $movie2->director; ?></td>
                <td><?php echo $movie2->year; ?></td>
                <td><?php echo $movie2->genre; ?></td>
                <td><?php echo $movie2->running_time;?>min</td>
                <td><?php echo $movie2->ageMovie(2020); ?></td>
            </tr>
            <tr class="line-h-35">
                <?php $movie3 = new Movie('Dillinger è morto', 'Marco Ferreri', '1969', 'Drama', 95); ?>
                <td><?php echo $movie3->title; ?></td>
                <td><?php echo $movie3->director; ?></td>
                <td><?php echo $movie3->year; ?></td>
                <td><?php echo $movie3->genre; ?></td>
                <td><?php echo $movie3->running_time; ?>min</td>
                <td><?php echo $movie3->ageMovie(2020); ?></td>
            </tr>
            <tr class="line-h-35">
                <?php $movie4 = new Movie('La grande guerra', 'Mario Monicelli', '1959', 'Drama', 135); ?>
                <td><?php echo $movie4->title; ?></td>
                <td><?php echo $movie4->director; ?></td>
                <td><?php echo $movie4->year; ?></td>
                <td><?php echo $movie4->genre; ?></td>
                <td><?php echo $movie4->running_time; ?>min</td>
                <td><?php echo $movie4->ageMovie(2020); ?></td>
            </tr>
        </table>
    </main>
</body>
</html>