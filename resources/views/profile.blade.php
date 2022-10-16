@extends('adminlte::page')

@section('title', 'Perfil')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<!-- falta ajustar rota, fazer validação e salvar -->
<form id="editfuncform" action="{{route('profile-edit.store', $user_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{--@method('put')--}}
    <input type="hidden" value="" name="user_id">
    <div class="rounded bg-white">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img id="preview-image" class="profile-user-img img-fluid img-circle" width="150px" height="150" src="/img/cursos/80ae4382ccfec987dca09fb98b49b750.jpg">
                    <label id="btn_image" class="btn-sm btn-success mt-3" for="imagem" style="cursor: pointer;"> Selecionar imagem </label>
                    <input id="imagem" type="file" name="imagem" accept=".png, .jpg, .jpeg" hidden>
                    <span class="font-weight-bold">
                       {{$user->name}}
                    </span>
                    <span class="text-black-50">
                        {{$user->email}}
                    </span>
                </div>
            </div>
            {{-- Até aqui está ok o Layout --}}


            <div class="col-md-5 border-right" >
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Configuração do Perfil</h4>
                    </div>
                    <x-adminlte-input name="nome" placeholder="Nome Completo *" value="{{$user->name}}">
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Nome completo" style="width: 48px">
                                <i class="fas fa-id-card-alt"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                    <x-adminlte-input name="data_nasc" placeholder="Data de Nascimento *" value="{{$profile->dt_birth}}">
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Data de Nascimento" style="width: 48px">
                                <i class="fas fa-lg fa-birthday-cake"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>

                    <div class="row justify-content-between">
                        <div class="col-6">
                            <x-adminlte-input name="rg" placeholder="RG *" value="{{$profile->RG}}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text" title="RG" style="width: 48px">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                        <div class="col-6">
                            <x-adminlte-input id='cpf' name="cpf" placeholder="CPF *" data-inputmask-regex="^\d{3}\.\d{3}\.\d{3}\-\d{2}$" data-mask value="{{$profile->CPF}}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text" title="CPF" style="width: 48px">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>
                    
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" title="Sexo" style="width: 48px">
                                        <i class="fas fa-venus-mars"></i>
                                    </div>
                                </div>
                                <select class="form-control" name="sexo" value="{{$profile->genre}}">
                                    <option value="Indefinido">Indefinido</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>


    

                    <div class="mt-5">
                        <div class="row justify-content-between">
                            <div class="col-8">
                                <x-adminlte-input id="cepInserted" name="cep" placeholder="Cep" value="{{$profile->CEP}}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text" title="CEP" style="width: 48px">
                                            <i class="far fa-address-card"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-4">
                                <button id="cepButton" class="btn btn-labeled btn-default" onclick="consultarCep(event)">
                                    <i id="cepSearch" class="fas fa-search"></i> Pesquisar
                                </button>
                            </div>
                        </div>

                        <x-adminlte-input id="end_logradouro" name="end_logradouro" placeholder="Endereço" rows="2" value="{{$profile->address}}">
                            <x-slot name="prependSlot"  >
                                <div class="input-group-text" title="Endereço" style="width: 48px">
                                    <i class="fas fa-lg fa-building"></i>
                                </div>
                            </x-slot>

                        </x-adminlte-textarea>

                        <x-adminlte-input type="text" name="end_num" placeholder="Número" value="{{$profile->house_number}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text" title="Número" style="width: 48px">
                                    <i class="fas fa-house-user"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="end_complemento" placeholder="Complemento" value="{{ $profile->complement}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text" title="Complemento" style="width: 48px">
                                    <i class="fas fa-house-user"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <div class="row justify-content-between">
                            <div class="col-9">
                                <x-adminlte-input id="end_cidade" name="end_cidade" placeholder="Cidade" value="{{$profile->city}}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text" title="Cidade" style="width: 48px">
                                            <i class="fas fa-city"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-3">
                                <x-adminlte-input id="end_estado" name="end_estado" placeholder="Estado" value="{{$profile->state}}" />
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button  class="btn btn-primary profile-button" >Salvar Alterações</button>
                    </div>
                </div>
            </div>



            {{-- Aqui está ok o layout --}}
            <div class="col-md-4 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Configuração de Usuário</h4>
                    </div>
                    <x-adminlte-input type="email" id='email' name="email" placeholder="Email" onblur="validateEmail(this)" value="{{$user->email}}">
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Email" style="width: 48px">
                                <i class="fas fa-at"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                    <x-adminlte-input type="password" id='password' name="password" placeholder="Nova senha">
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Nova senha" style="width: 48px">
                                <i class="fas fa-key"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>

                    <x-adminlte-input type="password" id='confirmpassword' name="password_confirmation" placeholder="Confirme a Senha">
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Confirme a Senha" style="width: 48px">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
            </div>
        </div>
    </div>
</form>
@stop

@section('js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cep-promise/dist/cep-promise.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/pt.js"></script>

<script>
    toastr.options.preventDuplicates = true;
    const initForm = () => {
        Inputmask('999.999.999-99', {
            placeholder: " ",
            clearMaskOnLostFocus: true,
            removeMaskOnSubmit: true
        }).mask('#cpf');

        Inputmask('99999-999', {
            placeholder: " ",
            clearMaskOnLostFocus: true,
            removeMaskOnSubmit: true
        }).mask('#cep');

        document.querySelector('#data_nasc').flatpickr({
            format: "d/m/Y",
            altFormat: "d/m/Y",
            altInput: true,
            locale: "pt",
        });
    }

    const validateFormFuncionario = () => {
        validatorAnunciante = FormValidation.formValidation(
            document.getElementById('editfuncform'), {
                fields: {
                    nome: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    sexo: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    estado_civil: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    rg: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    expedidor: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    cpf: {
                        validators: {
                            notEmpty: {
                                message: 'O Campo cpf é obrigatório.'
                            },
                            id: {
                                country: 'BR',
                                message: 'Insira um CPF válido'
                            }
                        }
                    },
                    data_nasc: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    cep: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    end_logradouro: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    end_cidade: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    end_estado: {
                        validators: {
                            notEmpty: {
                                message: 'Campo obrigatório.'
                            },
                        }
                    },
                    password_confirmation: {
                        validators: {
                            identical: {
                                compare: function() {
                                    return document.querySelector('[name="password"]').value;
                                },
                                message: 'A senha e sua confirmação não são iguais!',
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                }
            }
        );

        $('#btn-submit-form-editfuncform').on('click', function(e) {
            validatorAnunciante.validate().then(function(status) {
                if (status == 'Valid') {
                    $('#editfuncform').submit();
                } else {
                    toastr.error('Por favor verifique os campos obrigatórios.');
                }
            });
        });
    };

    function consultarCep(event) {
        event.preventDefault();
        var cepE = $("#cepInserted").val();

        cepE = cepE.replace("-", "");
        cepE = cepE.replaceAll("_", "");
        console.log(cepE)
        if (cepE.length == 8) {
            $("#cepButton").html(
                '<span class="spinner-border spinner-border-sm" style="width: 1.5rem; height: 1.5rem;" role="status" aria-hidden="true"></span>'
            );
            cep(cepE)
                .then(consultado => {
                    console.log(consultado);
                    $("#end_logradouro").val(
                        `${consultado.street} - ${consultado.neighborhood}`);
                    $("#end_cidade").val(consultado.city);
                    $("#end_estado").val(consultado.state);
                    $("#cepButton").html(
                        '<i id="cepSearch" class="fas fa-search"></i>Pesquisar'
                    );
                })
                .catch((err) => {
                    $("#cepButton").html(
                        '<i id="cepSearch" class="fas fa-search"></i>Pesquisar'
                    );
                    toastr.error('Não foi possível encontrar dados sobre o Cep');
                    $("#end_logradouro").val('');
                    $("#end_cidade").val('');
                    $("#end_estado").val('');
                    $("#cepInserted").removeClass('is-valid');
                    $("#cepInserted").addClass('is-invalid');
                })
        } else {
            toastr.error('Digite o Cep corretamente!');
        }
    }

    $('#imagem').on('change', function() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("preview-image").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    });

    initForm();
    validateFormFuncionario();
</script>
@if(session()->get('message'))
<script>
    toastr.success("{{ session()->get('message') }}")
</script>
@endif
@if(count($errors) > 0)
@foreach($errors->all() as $error)
<script>
    if ('{{$error}}'.includes('Tam. Min.')) {
        toastr.error('Há um número Mínimo de caracteres no campo')
    } else {
        toastr.error('{{$error}}')
    }
</script>
@endforeach
@endif
@stop