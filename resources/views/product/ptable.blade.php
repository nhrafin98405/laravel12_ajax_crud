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
                            @foreach ($product as $pro)
                                <tr>
                                    <td>{{ $pro->id }}</td>
                                    <td>{{ $pro->name }}</td>
                                    <td>{{ $pro->price }}</td>
                                    <td>{{ $pro->description }}</td>
                                    <td>
                                        <form action="{{ route('product.destroy', $pro->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-info">Edit</button>
                                        <button type="submit" class="btn btn-danger">Delet</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>