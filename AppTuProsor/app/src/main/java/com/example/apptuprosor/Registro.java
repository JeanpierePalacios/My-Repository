package com.example.apptuprosor;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class Registro extends AppCompatActivity implements View.OnClickListener {
    EditText etnombres, etedad, etcorreo, etpassword;
    Button btn_registrar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registro);
        etnombres = (EditText) findViewById(R.id.EditT_nombres);
        etedad = (EditText) findViewById(R.id.EditT_edad);
        etcorreo = (EditText) findViewById(R.id.EditT_correo);
        etpassword = (EditText) findViewById(R.id.EditT_password);
        btn_registrar = (Button) findViewById(R.id.Btn_registrar);
        btn_registrar.setOnClickListener(this);

    }

    @Override
    public void onClick(View v) {
        final String nombres = etnombres.getText().toString();
        final String edad = etedad.getText().toString();
        final String correo = etcorreo.getText().toString();
        final String password = etpassword.getText().toString();
        Response.Listener<String> respoListener = new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try {
                    JSONObject jsonResponse = new JSONObject(response);
                    boolean success = jsonResponse.getBoolean("success");
                    if(success){
                        Intent intent = new Intent(Registro.this,MainActivity.class);
                        Registro.this.startActivity(intent);
                    }else{
                        AlertDialog.Builder builder = new AlertDialog.Builder(Registro.this);
                        builder.setMessage("error en el registro").setNegativeButton("Retry",null).create().show();

                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }
        };

        RegistroRequest registroRequest = new RegistroRequest(nombres, edad, correo, password, respoListener);
        RequestQueue queve = Volley.newRequestQueue(Registro.this);
        queve.add(registroRequest);
    }
}