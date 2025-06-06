<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report | New Users</title>
    <style>
        body {
            margin: 0; /* Reset margin */
            font-family: Arial, sans-serif; /* Use a readable font */
        }

        header {
            padding: 10px 20px; /* Adjust padding */
            /* Remove specific height to let content dictate size */
        }

        .head {
            display: flex; /* Use flexbox for alignment */
            justify-content: space-between; /* Space items evenly */
            align-items: center; /* Center items vertically */
        }

        img {
            margin-top: 10px; /* Adjust margin as needed */
            height: 70px; /* Fixed height for image */
        }

        .info {
            display: flex; /* Allow flexbox in info for better alignment */
            flex-direction: column; /* Stack text vertically */
            justify-content: center; /* Center content vertically */
            text-align: right; /* Align text to the right */
        }

        .info p {
            margin: 0; /* Remove default margin */
            font-size: 20px;
            font-weight: 700;
        }

        td {
            padding: 8px; /* Add padding to table cells */
        }

        .main {
            margin: 20px; /* Margin around main content */
        }

        table {
            width: 100%; /* Full width for the table */
            border-collapse: collapse; 
            font-size: 9px;/* Remove spaces between cells */
        }

        th, td {
            border: 1px solid #ddd; /* Add border to table cells */
        }

        th {
            background-color: #f2f2f2; /* Light background for header */
            text-align: left; /* Align header text */
        }
    </style>
</head>
<body>
    <header>
        <div class="head">
            <div class="img">
                <img src="{{ url('admin_mat/assets/images/logo.png')}}" alt="Image Not found">
            </div>
            <div class="info">
                <p>Active & Inactive  Agency Account Report</p>
            </div>
            <div class="info">
                <p style="font-size: 16px;">Generated By: {{session("admin_name")}}</p>
            </div>
        </div>
        <hr />
    </header>

    <div class="main">
        <p style="text-align: center">Active Agency</p>
        <table cellpadding=10 cellspacing=0 align="center">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Agency Name </th>
                   
                    <th> email </th>
                    <th> Contact</th>
                    <th>City</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data1 as $data1)
                <tr>
                    <td>{{$data1->id}}</td>
                    <td>{{$data1->agency_name}}</td>
                   
                  <td>{{$data1->email}}</td>
                 
               
                  <td class=""> {{$data1->contact}} </td>
                  <td>{{$data1->city_name}}</td>
                
                 
                  {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                 
                </tr>
               


                @endforeach 
              </tbody>
        </table>

        <p style="text-align: center">Inactive Agency</p>
        <table cellpadding=10 cellspacing=0 align="center">
            <thead>
                <tr> <th>#</th>
                    <th> Agency Name </th>
                   
                    <th> email </th>
                    <th> Contact</th>
                    <th>City</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data2 as $data2)
                <tr>
                    <td>{{$data2->id}}</td>
                    <td>{{$data2->agency_name}}</td>
                   
                  <td>{{$data2->email}}</td>
                 
               
                  <td class=""> {{$data2->contact}} </td>
                  <td>{{$data2->city_name}}</td>
                
                 
                  {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                 
                </tr>
               


                @endforeach 
              </tbody>
        </table>
    </div>
</body>
</html>
