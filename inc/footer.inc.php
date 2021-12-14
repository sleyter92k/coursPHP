<footer class="bg-primary text-white">
    <div class="bg-violet">
        <p>
        <?php 
        setlocale(LC_ALL, 'fr_FR');
        echo strftime("%A %e %B %Y");
        echo ' - ';
        date_default_timezone_set("Europe/Paris");
        echo date('H:i:s');
        ?>
        </p>
        <!-- https://www.php.net/manual/fr/function.date.php -->
        <!-- https://www.php.net/manual/fr/timezones.europe.php -->
    </div>
</footer>