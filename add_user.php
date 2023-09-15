
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .registration-form {
            background-color: #f5f9fc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .form-title {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s ease-in-out;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
        }

        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            var isWorkerCheckbox = document.getElementById("is_worker");
            var categoryGroup = document.getElementById("category_group");

            isWorkerCheckbox.addEventListener("change", function() {
                if (isWorkerCheckbox.checked) {
                    categoryGroup.style.display = "block";
                } else {
                    categoryGroup.style.display = "none";
                }
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2 class="form-title">User Registration</h2>
            <form action="submit_registration.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email" class="label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address" class="label">Address:</label>
                    <textarea class="form-control" id="address" name="address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="mobile" class="label">Mobile:</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" required>
                </div>

                <div class="form-group">
                    <label class="label">Identity Document:</label>
                    <input type="file" class="form-control" id="identity_document" name="identity_document" accept=".pdf, .jpg, .jpeg, .png" required>
                </div>

                <div class="form-group">
                    <label for="dob" class="label">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <div class="form-group">
                    <label for="sex" class="label">Sex:</label>
                    <select class="form-control" id="sex" name="sex" required>
                        <option value="">Select Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nationality" class="label">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" required>
                </div>

                <div class="form-group">
                    <label class="label">Are you a worker?</label>
                    <input type="checkbox" id="is_worker" name="is_worker">
                </div>
                <div class="form-group" id="category_group">
                    <label for="category" class="label">Category:</label>
                    <select class="form-control" id="category" name="category">
                        <option value="">Select Category</option>
                        <option value="customer">customer</option>
                        <option value="Electrician">Electrician</option>
                        <option value="Fitter">Fitter</option>
                        <option value="Carpainter">Carpainter</option>
                        <option value="Plumber">Plumber</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password" class="password">Set Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>