$(function()
{
    // Validation for login form
    $("#login-form").validate(
        {                   
        // Rules for form validation
        rules:
        {
            email:
            {
                required: true,
                email: true
            },
            password:
            {
                required: true,
                minlength: 3,
                maxlength: 20
            }
        },

        // Messages for form validation
        messages:
        {
            email:
            {
                required: 'Por favor ingrese su dirección de correo',
                email: 'Por favor ingrese un correo valido'
            },
            password:
            {
                required: 'Por favor ingrese su contraseña'
            }
        },                  

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

});

$(function()
{
    $("#agregar-persona").validate(
        {                   
        // Rules for form validation
        rules:
        {
            cedula:
            {
                required: true,
                digits: true,
                rangelength: [8,8]
            },
            nombre:
            {
                required: true,
                rangelength: [3, 100]
            },
            apellido:
            {
                required: true,
                rangelength: [3, 100]
            },
            email:
            {
                required: true,
                email: true
            },
            telefono:
            {
                required: true,
                digits: true
            },
            genero:
            {
                required: true,
            },
            cargo:
            {
                required: true,
            },
            carrera:
            {
                required: true,
            }
        },
                            
        // Messages for form validation
        messages:
        {
            cedula:
            {
                required: 'Por favor complete este campo',
                digits: 'Por favor ingrese solo numeros',                
                rangelength: 'Cantidad de caracteres invalida'
            },
            nombre:
            {
                required: 'Por favor complete este campo',
                rangelength: 'Cantidad de caracteres invalida'
            },
            apellido:
            {
                required: 'Por favor complete este campo',
                rangelength: 'Cantidad de caracteres invalida'
            },
            email:
            {
                required: 'Por favor complete este campo',
                email: 'Por favor ingrese un correo valido'
            },
            telefono:
            {
                required: 'Por favor complete este campo',
                digits: 'Por favor ingrese solo numeros'
            },
            genero:
            {
                required: 'Por favor complete este campo',
            },
            cargo:
            {
                required: 'Por favor complete este campo',
            },
            carrera:
            {
                required: 'Por favor complete este campo',
            }
        },                  
        
        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });
});

$(function()
{
    // Validation for login form
    $("#incluir-persona").validate(
        {                   
        // Rules for form validation
        rules:
        {
            persona:
            {
                required: true,
            },
            grupo:
            {
                required: true,
            }
        },

        // Messages for form validation
        messages:
        {
            persona:
            {
                required: 'Por favor complete este campo',
            },
            grupo:
            {
                required: 'Por favor complete este campo'
            }
        },                  

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

});

$(function()
{
    // Validation for login form
    $("#agregar-grupo").validate(
        {                   
        // Rules for form validation
        rules:
        {
            nombre:
            {
                required: true,
                rangelength: [10,500]
            }
        },

        // Messages for form validation
        messages:
        {
            nombre:
            {
                required: 'Por favor complete este campo',
                rangelength: 'Cantidad de caracteres invalida'
            }
        },                  

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

});

$(function()
{
    // Validation for login form
    $("#agregar-carrera").validate(
        {                   
        // Rules for form validation
        rules:
        {
            carrera:
            {
                required: true,
                rangelength: [10,500]
            }
        },

        // Messages for form validation
        messages:
        {
            carrera:
            {
                required: 'Por favor complete este campo',
                rangelength: 'Cantidad de caracteres invalida'
            }
        },                  

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

});

$(function()
{
    // Validation for login form
    $("#agregar-admin").validate(
        {                   
        // Rules for form validation
        rules:
        {
            persona:
            {
                required: true,
            },
            password:
            {
                required: true,
                rangelength: [6,20]
            },
            passwordConfirm:
            {
                required: true,
                rangelength: [6,20],
                equalTo: '#password'
            }
        },

        // Messages for form validation
        messages:
        {
            persona:
            {
                required: 'Por favor complete este campo'
            },
            password:
            {
                required: 'Por favor instroduzca una contraseña',
                rangelength: 'Cantidad de caracteres invalida'
            },
            passwordConfirm:
            {
                required: 'Por favor, introduzca su contraseña una vez más',
                equalTo: 'Por favor, introduzca la misma contraseña anterior',
                rangelength: 'Cantidad de caracteres invalida'
            }
        },                  

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

});

