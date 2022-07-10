<!-- toast bottom iconed -->
<div id="toast-7" class="toast-box toast-bottom" style="justify-content: center">
    <div class="in">
        <ion-icon name="document-outline" style="width: 24px"></ion-icon>
        <ion-icon name="trash-outline" style="width: 24px" data-bs-toggle="modal" data-bs-target="#DialogIconedButtonInline1"></ion-icon>
    </div>
    <div class="in" style="padding: 0">
        <button type="button" class="btn btn-secondary" id="coup_pron" style="border-radius: inherit; background: white !important; border:white !important; color: #11a44c !important;">PRONOSTIC MULTIPLE(<span id="pron_numb"></span>)</button>
        {{---<ion-icon class="close-button" name="close-circle-outline" style="width: 24px"></ion-icon>---}}
    </div>
</div>
<!-- * toast bottom iconed -->

<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline1" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VIDER</h5>
            </div>
            <div class="modal-body">
                Etes vous sûr de vouloir vider ce coupon?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                        VIDER
                    </a>
                    <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        ANNULER
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Iconed Inline -->

<script>

    window.addEventListener("load", function() {

        var p = new Object();

        p['token'] = "{{$token}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: `https://demo.pronomix.net/api/coupon-pronostics`,
            data: p,
            success: function(data) {
                if (data.data.pronostics !== undefined){
                    var mul_pron = data.data.pronostics.length;
                }else {
                    mul_pron = 0;
                }

                $("#pron_numb").append(mul_pron);
                toastbox('toast-7');
            },
            statusCode: {
                500: function() {
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                },
                419: function (){
                    window.location = "{{ route('logout') }}";
                }
            }
        });

    });


    $('#coup_pron').click(function(e) {
        $("#loader").show();
        var p = new Object();

        p['token'] = "{{$token}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: `https://demo.pronomix.net/api/coupon-pronostics`,
            data: p,
            success: function(data) {
                if (data.success === true){
                    console.log(data)
                    var new_token = data.new_token;
                    var data_reg = data.data;
                    var o = new Object();
                    o["new_token"] = new_token;
                    o["data_reg"] = data_reg;
                    var url = "{{ route('pronos_multi') }}";
                    //window.location = `${url}?new_token=` + new_token + `&match_data=` + match_data;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: o,
                        success: function(data) {
                            window.location = "{{ route('coup_pron') }}";
                        },
                        statusCode: {
                            500: function() {
                                $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                                $("#loader").hide();
                                $('#DialogIconedDanger').modal('show');
                            }
                        }
                    });
                }

            },
            statusCode: {
                500: function() {
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                }
            }
        });

    });
</script>
