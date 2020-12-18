<script >
    <?php
    if(session()->has('success')){
    ?>
    notify("Great!", "<?= session()->get('success') ?>", "success");

    <?php
    } elseif (session()->has('error')) {
    ?>
    notify("Oops...!", "<?= session()->get('error') ?>", "error");

    <?php
    }
    elseif (session()->has('warning')) {
    ?>
    notify("Oops...!", "<?= session()->get('warning') ?>", "warning");

    <?php
    }
    elseif (session()->has('info')) {
    ?>
    notify("Great!", "<?= session()->get('info') ?>", "info");

    <?php
    }
    elseif (session()->has('question')) {
    ?>
    notify("What are you doing?", "<?= session()->get('question') ?>", "question");

    <?php
    }
    ?>
</script>
