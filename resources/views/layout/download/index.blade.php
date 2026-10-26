<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Download Page </title>
        <!--all css js link-->
        @include ('layout.apps.assets')
        <!--all css js link end-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <style>
                    @media print {
                        .print-btn {
                            display: none !important;
                        }
                    }
                    .print-btn{
                        padding: 7px 20px;
                        background: #123b63;
                        font-size: 14px;
                        color: black;
                        border: none;
                        outline: none;
                        border-radius: 25px;
                        color: white;
                        font-weight: bold;

                    }
                    .download{
                        padding: 7px 20px;
                        background: #198754;
                        font-size: 14px;
                        color: black;
                        border: none;
                        outline: none;
                        border-radius: 25px;
                        color: white;
                        font-weight: bold;
                    }
                    .print{
                        padding: 0px 6px;
                    }
                    @page {
                        size: A4 landscape;
                        margin: 25px;
                    }

                    * {
                        box-sizing: border-box;
                    }

                    body {
                        font-family: DejaVu Sans, Arial, sans-serif;
                        color: #263238;
                        font-size: 12px;
                        margin: 0;
                        background: #fff;
                    }

                    .header {
                        text-align: center;
                        padding: 18px 10px;
                        background: #123b63;
                        color: #fff;
                        border-radius: 8px;
                    }

                    .header h1 {
                        margin: 0 0 8px;
                        font-size: 24px;
                    }

                    .header p {
                        margin: 0;
                        font-size: 12px;
                    }

                    .report-info {
                        margin: 20px 0 12px;
                        padding: 10px;
                        background: #f0f5fa;
                        border-left: 4px solid #168aad;
                    }

                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 12px;
                    }

                    thead {
                        background: #168aad;
                        color: #fff;
                    }

                    th, td {
                        border: 1px solid #d7e0e8;
                        padding: 12px 10px;
                        font-size: 14px;
                        text-align: left;
                    }

                    th {
                        font-size: 16px;
                        text-transform: uppercase;
                    }

                    tbody tr:nth-child(even) {
                        background: #f2f7fb;
                    }

                    tbody tr:nth-child(odd) {
                        background: #fff;
                    }

                    .id {
                        text-align: center;
                        width: 60px;
                    }

                    .footer {
                        margin-top: 25px;
                        text-align: center;
                        color: #607080;
                        font-size: 10px;
                    }

                    .signature {
                        margin-top: 45px;
                        text-align: right;
                    }

                    .signature span {
                        display: inline-block;
                        width: 180px;
                        border-top: 1px solid #333;
                        text-align: center;
                        padding-top: 8px;
                    }
                </style>
            </head>

            <body>

                <div class="header mt-5">
                    <h1>STUDENT INFORMATION REPORT</h1>
                    <p>Official Student Record</p>
                </div>

                <div class="report-info">
                    <strong>Total Students:</strong> {{ $students->count() }}
                    &nbsp;&nbsp;&nbsp;
                    <strong>Report Date:</strong> {{ date('d M Y') }}
                </div>

                <table>
                    <thead>
                        <tr>
                            <th class="id">ID</th>
                            <th>Student Name</th>
                            <th>Subject</th>
                            <th>Roll</th>
                            <th>Registration</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td class="id">{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->subject }}</td>
                                <td>{{ $student->roll }}</td>
                                <td>{{ $student->regi }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="text-align:center;">
                                    No student records found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="signature">
                    <span>Authorized Signature</span>
                </div>

                <div class="footer">
                    Student Information Management System
                </div>
            </div>
            <button onclick="printPDF()" class="print-btn">
                <span class="print"><i class="fa-solid fa-print"></i></span>Print Now
            </button>

        </div>
        <script>
            function printPDF() {
                window.print();
            }
        </script>
    </body>
</html>