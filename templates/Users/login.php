<a href="/sample_app/users/signup/">新規登録</a>
<form method="post" name="login">
    <input
        type="hidden"
        name="_csrfToken"
        autocomplete="off"
        value="<?= $this->request->getAttribute('csrfToken') ?>"
    >
    <label>email</label>
    <input type="text" name="email">
    <label>password</label>
    <input type="password" name="password">
    <button type="submit" name="login">login</button>
</form>