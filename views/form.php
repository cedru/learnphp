<?php include 'partials/header.php'; ?>

<form action="/test" method="POST" onsubmit="return validateAge();">
    <input type="text" placeholder="Name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="submit" value="Saada">
</form>

<script>
    function validateAge() {
        var ageInput = document.getElementsByName("age")[0];
        var age = parseInt(ageInput.value);

        if (age > 100) {
            alert("too old nigga");
            return false;
        }

        return true;
    }
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
