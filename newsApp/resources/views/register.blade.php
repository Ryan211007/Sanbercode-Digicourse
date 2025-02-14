<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanboreBook Form</title>
</head>
<body>
    <h1>Buat Halaman Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf

        <label for="first-name">First Name:</label><br><br>
        <input type="text" id="first-name" name="first_name" required><br><br>

        <label for="last-name">Last Name:</label><br><br>
        <input type="text" id="last-name" name="last_name" required><br><br>

        <label for="Gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="Male" required> Male<br>
        <input type="radio" id="female" name="gender" value="Female" required> Female<br>
        <input type="radio" id="other" name="gender" value="Other" required> Other<br><br>

        <label for="Nationality">Nationality:</label><br><br>
        <select name="nationality" id="Nationality"><br><br>
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br><br>

        <label for="Language">Language Spoken:</label><br><br>
        <input type="checkbox" id="bahasa" name="languages[]" value="Bahasa Indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" id="english" name="languages[]" value="English"> English<br>
        <input type="checkbox" id="other" name="languages[]" value="Other"> Other<br><br>

        <label for="Bio">Bio:</label><br><br>
        <textarea id="Bio" name="bio" rows="10" cols="30" required></textarea><br><br>

        <input type="submit" value="SignUp">
    </form>
</body>
</html>