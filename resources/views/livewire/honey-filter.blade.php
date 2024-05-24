<!-- livewire/honey-search.blade.php -->


<div>
    {{-- @include('rightsidebar') --}}

        <div class="container">

            <h2>All Honeys</h2>
            <input type="text" wire:model="search" placeholder="Search...">
            {{-- @dd($search) --}}
            <table class="custom-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hive ID</th>
                        <th>Quantity (kg)</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Ndrysho dhe shlyej te dhënat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($honeys as $honey)
                        <tr>
                            <td>{{ $honey->id }}</td>
                            <td>{{ $honey->hive_id }}</td>
                            <td>{{ $honey->quantity_kg }}</td>
                            <td>{{ $honey->kind_of_honey }}</td>
                            <td>{{ $honey->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>
                                <a href="{{ route('editHoney', ['id' => $honey->id]) }}" class="btn btn-primary">Ndrysho te
                                    dhënat</a>
                                <form action="{{ route('deleteHoney', ['id' => $honey->id]) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Shlyej te dhënat</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $honeys->links('pagination::bootstrap-5') }}



        </div>
    </div>

    <style>
        .container {
            max-width: 800px;
            /* Increased max-width for better table visibility */
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
            /* Utilizing full width of container */
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
