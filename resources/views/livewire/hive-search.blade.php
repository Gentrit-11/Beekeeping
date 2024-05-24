<div>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

@include('rightsidebar')

        <div class="container">

                <h1>All Hives</h1>
                <input type="text" wire:model="searchTerm" placeholder="Search...">

                <table class="custom-table">

                    <thead>
                        <tr>
                            <th>Hive ID</th>
                            <th>Special ID</th>
                            <th>Hive Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hives as $hive)
                            <tr>
                                <td>{{ $hive->id }}</td>
                                <td>{{ $hive->HiveID }}</td>
                                <td>{{ $hive->HiveColor }}</td>
                                <td>
                                    <a href="{{ route('editHive', ['id' => $hive->id]) }}" class="btn btn-primary">Edit</a>
                                    <!-- Form for deleting hive entry -->
                                    <form action="{{ route('deleteHive', ['id' => $hive->id]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Links -->
                {{ $hives->links() }}



</div>

<style>
    .container {
        max-width: 400px;
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .custom-table th,
    .custom-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .custom-table th {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: left;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .custom-table tbody tr:hover {
        background-color: #e0e0e0;
    }
</style>

@include('style')


@include('sidebar')
<!-- partial -->

<!-- partial -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
@include('script')

