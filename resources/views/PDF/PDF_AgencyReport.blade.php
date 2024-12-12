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
            font-size: 9px;
            margin-top: 20px;/* Remove spaces between cells */
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
                <p>All Job Posting Details</p>
            </div>
            <div class="info">
                <p style="font-size: 16px;">Generated By: {{session("agency_name")}}</p>
            </div>
        </div>
        <hr />
    </header>

    <div class="main">
        <p style="text-align: center">-: Agency Job Posting Details :- </p>
        @foreach ($data as $data)
        <table cellpadding=10 cellspacing=0 align="center">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Information </th>
                </tr>
              </thead>
              <tbody>
               
                <tr>
                    <td>ID</td>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <td>Post name</td>
                    <td>{{$data->job_post_name}}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <span class="text-xs font-weight-bold"><ul>
                            @foreach (explode(';',$data->description) as $line)
                              <li style="text-transform: capitalize">{{$line}}</li>
                            @endforeach  
                          </ul></span>
                    </td>
                </tr>
                <tr>
                    <td>DeadLine</td>
                    <td>{{$data->Deadline}}</td>
                </tr>
                <tr>
                    <td>Min Salary</td>
                    <td>{{$data->min_salary}}</td>
                </tr>
                <tr>
                    <td>Max Salary</td>
                    <td>{{$data->max_salary}}</td>
                </tr>
                <tr>
                    <td>Min Experiance</td>
                    <td>{{$data->min_experience}}</td>
                </tr>
                <tr>
                    <td>Max Experiance</td>
                    <td>{{$data->max_experience}}</td>
                </tr>
                <tr>
                    <td>Degree</td>
                    <td>{{$data->degree}}</td>
                </tr>
                <tr>
                    <td>Requirement</td>
                    <td>
                        <span class="text-xs font-weight-bold"><ul>
                            @foreach (explode(';',$data->requirement) as $line)
                              <li style="text-transform: capitalize">{{$line}}</li>
                            @endforeach  
                          </ul></span>
                    </td>
                </tr>

                <tr>
                    <td>Benefit</td>
                    <td>
                        <span class="text-xs font-weight-bold"><ul>
                            @foreach (explode(';',$data->benefit) as $line)
                              <li style="text-transform: capitalize">{{$line}}</li>
                            @endforeach  
                          </ul></span>
                    </td>
                </tr>
                <tr>
                    <td>Job Category</td>
                    <td>{{$data->cat}}</td>
                </tr>
                <tr>
                    <td>Job Category description</td>
                    <td>{{$data->de}}</td>
                </tr>
                <tr>
                    <td>Job Location</td>
                    <td>{{$data->city_name}}, {{$data->state_name}}</td>
                </tr>
              </tbody>
        </table>

        @endforeach
        
        
    </div>
</body>
</html>