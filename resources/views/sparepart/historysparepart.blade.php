<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/sparepart">Checklist Mesin</a>
            <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
        </div>
    </nav>
    <title>Checklist Mesin</title>
</head>
<body>
    <h2><center>History Log</center></h2>
    @if($audits->isEmpty())
        <p><center>No history found</center></p>
    @else
        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-bordered table-hover w-auto table-center">
                    <thead>
                        <tr>
                            <th scope="col">Changed By</th>
                            <th scope="col">Event</th>
                            <th scope="col">Old Values</th>
                            <th scope="col">New Values</th>
                            <th scope="col"></th> <!-- Added column for actions -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($audits as $audit)
                            <tr>
                                <td>
                                    @if ($audit->user_id === null)
                                        Unknown User
                                    @else
                                        {{ $audit->user->name }}
                                    @endif
                                </td>
                                <td>{{ $audit->event }}</td>
                                <td>{{ is_array($audit->old_values) ? json_encode($audit->old_values) : $audit->old_values }}</td>
                                <td>{{ is_array($audit->new_values) ? json_encode($audit->new_values) : $audit->new_values }}</td>
                                <td>{{ $audit->updated_at }}</td>
                                <td>
                                    <form action="{{ route('deletehistorysparepart', $audit->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this history log?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</body>
</html>
