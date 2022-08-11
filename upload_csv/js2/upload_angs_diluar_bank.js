// Function ubah separator angka..............................................
function rubah(angka){
    let reverse = angka.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join(',').split('').reverse().join('');
    return ribuan;
}

$('#pesan_contract_ada').hide();

$(document).on('keyup mouseup', '#principal_bank', function(){
    let principalBank = $('#principal_bank').val();
    if(principalBank == ''){
        $('#principal_bank_v').text('');
    }else{
        $('#principal_bank_v').text(`Separator : ${rubah(principalBank)}`);
    }
});

$(document).on('keyup mouseup', '#interest_bank', function(){
    let interest_bank = $('#interest_bank').val();
    if(interest_bank == ''){
        $('#interest_bank_v').text('');
    }else{
        $('#interest_bank_v').text(`Separator : ${rubah(interest_bank)}`);
    }
});

$(document).on('keyup mouseup', '#handling_fee', function(){
    let handlingFee = $('#handling_fee').val();
    if(handlingFee == ''){
        $('#handling_fee_v').text('');
    }else{
        $('#handling_fee_v').text(`Separator : ${rubah(handlingFee)}`);
    }
});

$(document).on('keyup mouseup', '#installment', function(){
    let installment = $('#installment').val();
    if(installment == ''){
        $('#installment_v').text('');
    }else{
        $('#installment_v').text(`Separator : ${rubah(installment)}`);
    }
});

$(document).on('keyup mouseup', '#provision_fee', function(){
    let provisionFee = $('#provision_fee').val();
    if(provisionFee == ''){
        $('#provision_fee_v').text('');
    }else{
        $('#provision_fee_v').text(`Separator : ${rubah(provisionFee)}`);
    }
});

$(document).on('keyup mouseup', '#admin_fee', function(){
    let adminFee = $('#admin_fee').val();
    if(adminFee == ''){
        $('#admin_fee_v').text('');
    }else{
        $('#admin_fee_v').text(`Separator : ${rubah(adminFee)}`);
    }
});

$(document).on('keyup', '#installment_date', function(){
    let installmentDate = $('#installment_date').val();
    if(installmentDate > 31 || installmentDate < 1){
        $('#installment_date_group').addClass('has-error');
        $('#installment_date_error').text('Error : Angka yang anda masukkan tidak valid!');
        $('#installment_date').val('');
    }else{
        $('#installment_date_group').removeClass('has-error');
        $('#installment_date_error').text('');
    }
});

// Validasi Jika menuliskan contract no yang sudah digunakan sebelumnya

$(document).on('keyup', '#contract_no', function(){
    let contract_no = $(this).val();

    $.ajax({
        url : 'cek_contract_no.php',
        method : 'post',
        data : {contract_no : contract_no},
        dataType : 'text',
        success : function(result){
          $('#pesan_contract_ada').html(result);

          let cek_contract_no = $('#cek_contract_no').val();

          if(cek_contract_no == 1){
            $('#contract_no').val('');
            $('#pesan_contract_ada').show();
          }else{
            $('#pesan_contract_ada').hide();
          }

        }
    });
});