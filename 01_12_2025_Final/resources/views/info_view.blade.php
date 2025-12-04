<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <h2>Student Information</h2>
    <table border="1">
        <tr>
            <th>Address</th>
            <th>Date of Birth</th>               
            <th>Guardian_name</th>
            <th>Guardian_contact</th>
            <th>create_at</th>
            <th>update_at</th>
        </tr>       
        @foreach($info as $data)
        <tr> 
            <td>{{ $data->address }}</td>
            <td>{{ $data->date_of_birth }}</td>
            <td>{{ $data->guardian_name }}</td>
            <td>{{ $data->guardian_contact }}</td>  
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->updated_at }}</td>     

        </tr>
        @endforeach
    </table>                                
</div>
