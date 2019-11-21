<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr th{
            padding: 8px;
            background-color:#5f5f5f;
            color: white;
        }

        table tr td{
            padding: 5px;
        }

        table tr td:first-child{
            text-align:center;
        }

        table tr th, td {
            border: 1px black solid;
        }
    </style>
</head>
<body>

    <section id="main" style="width:50%;margin:20px auto;">

        <fieldset>
            <legend>Contact form</legend>
            <form action="" method="post">
                <p>
                    name: <input type="text" name="name" id="nameid" plaholder="input name">
                </p>
                <p>
                    email: <input type="email" name="name" id="nameid" plaholder="input name">
                </p>
                <p>
                    phone: <input type="number" name="name" id="nameid" plaholder="input name">
                </p>
                <p>
                    <input type="submit" value="SAVE">
                </p>
            </form>
        </fieldset>
        
        <fieldset>
            <legend>Contact List</legend>

            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fakhri</td>
                    <td>fakhrinf@hotmail.com</td>
                    <td>081297128773</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:center;">No Data</td>
                </tr>
            </table>

        </fieldset>

    </section>

</body>
</html>