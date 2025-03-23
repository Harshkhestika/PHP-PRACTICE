<!DOCTYPE html>
<html>
<head>
    <title>Survey Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        label, input, select { display: block; width: 100%; margin-bottom: 10px; }
        #filePreview { max-width: 100px; margin-top: 10px; display: none; }
    </style>
</head>
<body>
<?php
echo '
    <h2>Survey Form</h2>
    <form id="surveyForm" action="display.html" method="GET" onsubmit="return validateForm()">
        <label>Name: <input type="text" name="name" id="name" required></label>
        <label>Age: <input type="number" name="age" id="age" required></label>
        <label>Email: <input type="email" name="email" id="email" required></label>
        <label>Gender:
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
        </label>
        <label>Favourite Programming Language:
            <select name="language" id="language">
                <option value="Python">Python</option>
                <option value="JavaScript">JavaScript</option>
                <option value="C++">C++</option>
            </select>
        </label>
        <label>Country:
            <select id="country" name="country" onchange="updateStates()">
                <option value="">Select Country</option>
                <option value="USA">USA</option>
                <option value="India">India</option>
            </select>
        </label>
        <label>State:
            <select id="state" name="state">
                <option value="">Select State</option>
            </select>
        </label>
        <label>Profile Picture:
            <input type="file" id="fileUpload" accept="image/*" onchange="previewFile()">
            <img id="filePreview">
        </label>
        <button type="submit">Submit</button>';
        ?>
    </form>
   
</body>
</html>