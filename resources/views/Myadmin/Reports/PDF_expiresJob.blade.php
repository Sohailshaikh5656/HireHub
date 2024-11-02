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
            border-collapse: collapse; /* Remove spaces between cells */
        }

        th, td {
            border: 1px solid #ddd; /* Add border to table cells */
        }

        th {
            background-color: #f2f2f2; /* Light background for header */
            text-align: left; /* Align header text */
        }
        table{
        font-size: 9px;
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
                <p>All Job Expires Data Report</p>
            </div>
            <div class="info">
                <p style="font-size: 16px;">Generated By: {{session("admin_name")}}</p>
            </div>
        </div>
        <hr />
    </header>

    <div class="main">
        <table class="table">
            <thead>
              <tr>
                  <th>#</th>
                  <th> Agency </th>
                  <th> Name </th>
                  <th> Description </th>
                  <th> Posting Date</th>
                  <th> Deadline </th>
                  <th> Salary</th>
                  <th> Eduaction Required</th>
                 
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $data )
              <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->agency_name}}</td>
                  <td>{{$data->postName}}</td>
                  <td> 
                  <ul>
                      @foreach (explode(';',$data->description) as $line)
                        <li style="text-transform: capitalize">{{$line}}</li>
                      @endforeach  
                    </ul>    
                  </td>
                  <td class=""> {{$data->created_at}} </td>
                  <td class=""> {{$data->Deadline}} </td>
                  
                  <td> {{$data->min_salary}} to {{$data->max_salary}} / Lakh Per  Anum  </td>
                  {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                  <td>{{$data->degree}}</td>
              </tr>
             
              @endforeach 
            </tbody>
          </table>
    </div>
</body>
</html>