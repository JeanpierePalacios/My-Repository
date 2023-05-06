package com.example.apptuprosor;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.lang.reflect.Method;
import java.util.HashMap;
import java.util.Map;

public class RegistroRequest extends StringRequest {
    private static final String REGISTRO_REQUEST_URL="http://192.168.22.136/Registro.php";
    private Map<String,String> params;
    public RegistroRequest(String nombres, String edad, String correo, String password, Response.Listener<String> listener){
        super(Method.POST, REGISTRO_REQUEST_URL, listener, null);
        params=new HashMap<>();
        params.put("nombres",nombres);
        params.put("edad",edad);
        params.put("correo",correo);
        params.put("password",password);
    }

    @Override
    public Map<String, String> getParams() {
        return params;
    }
}
