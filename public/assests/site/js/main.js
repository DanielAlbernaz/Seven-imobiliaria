function redirect(){
    window.location.href = '/';
}



// function enviarFormBuscaPrincipal(){
//     var tipo = $('#tipo').val();
//     var finalidade = $('#finalidade').val();
//     var localizacao = $('#localizacao').val();
//     jQuery.ajax({
//         url:  'busca-imoveis',
//         type: "POST",
//         dataType: "JSON",
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         data: $('#frmBuscaPrincipal').serialize(),
//         success: function( data )
//         {
//             if(data.situacao == 'success'){
//                 mesages('success', 'Status alterado!');
//                 setTimeout(function() {
//                     window.location.reload();
//                   }, 1000);

//             }
//             if(data.situacao == 'error'){
//                 mesages('error', 'Erro ao alterar o status!');
//             }
//         }
//     });
// }
