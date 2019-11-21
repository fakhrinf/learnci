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

        .alert-success{
            padding: 5px;
            border-radius: 5px;
            background-color: #4CAF50;
            color:white;
        }
    </style>
</head>
<body>

    <section id="main" style="width:50%;margin:20px auto;">
        <?php if(!empty($this->session->flashdata('message'))):?>
            <div class="alert-success">
                <p><?=$this->session->flashdata('message')?></p>
            </div>
        <?php endif;?>

        <fieldset>
            <legend>Contact form</legend>
            <form action="<?=site_url('home/manage')?>" method="post">
                <p>
                    name: <input type="text" name="name" id="nameid" plaholder="input name" value="<?=(isset($data)) ? $data->name : ''?>">
                </p>
                <p>
                    email: <input type="email" name="email" id="emailid" plaholder="input name" value="<?=(isset($data)) ? $data->email : ''?>">
                </p>
                <p>
                    phone: <input type="number" name="phone" id="phoneid" plaholder="input name" value="<?=(isset($data)) ? $data->phone : ''?>">
                </p>
                <p>
                    <input type="hidden" name="id" value="<?=(isset($data)) ? $data->id : 0 ?>">
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
                <?php if (isset($contact) && !empty($contact)): ?>
                    <?php foreach ($contact as $i => $c): ?>
                        <tr>
                            <td><?=$i+1?></td>
                            <td><?=$c->name?></td>
                            <td><?=$c->email?></td>
                            <td><?=$c->phone?></td>
                            <td><a href="<?=site_url('home/edit/'.$c->id)?>">Edit</a></td>
                            <td><a href="<?=site_url('home/delete/'.$c->id)?>">Delete</a></td>
                        </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <tr>
                        <td colspan="6" style="text-align:center;">No Data</td>
                    </tr>
                <?php endif; ?>
            </table>

        </fieldset>

    </section>

</body>
</html>