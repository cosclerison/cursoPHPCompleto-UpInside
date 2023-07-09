<article style="
    padding: 5px 20px;
    background: #eee;
    border-radius: 4px;
">
    <h1><?= $profile->name; ?></h1>
    <p>
        Trabalha na <?= $profile->company; ?><br />
        <a title="Enviar E-Mail" href="mailto:<?= $profile->email; ?>">Enviar E-Mail</a>
    </p>
</article>