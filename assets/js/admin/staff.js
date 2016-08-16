    $(document).ready(function() {
        $('#dataTables-staff').DataTable({
                responsive: true,
                "columnDefs": [
                            { "orderable": false, "targets": 6 }
                        ],
                "order": [[ 3, 'asc' ]]
        });

    });


