<table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info">Edit</button>
                                        <button type="button" class="btn btn-danger">Delet</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>