package com.demo234.kvnnaik.complaintbox;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.InputStreamReader;

import retrofit.Callback;
import retrofit.RetrofitError;
import retrofit.client.Response;

public class register extends AppCompatActivity implements View.OnClickListener {

    EditText t1,t2,t3;
    Button b1,b2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        init();
    }

    public void init() {
        t1=(EditText) findViewById(R.id.et1);
        t2=(EditText) findViewById(R.id.et2);
        t3=(EditText) findViewById(R.id.et0);



        b1=(Button) findViewById(R.id.b1);
        b2=(Button) findViewById(R.id.b2);


        b1.setOnClickListener(this);
        b2.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        switch (view.getId())
        {

            case R.id.b1:
                insertcode();

                break;
            case R.id.b2:
                Intent i3=new Intent(register.this,login.class);
                startActivity(i3);

        }


    }

    private void insertcode() {
        Config s1=new Config();
        s1.abc();
        s1.api.insertUser(
                t3.getText().toString(),
                t1.getText().toString(),
                t2.getText().toString(),



                new Callback<Response>() {
                    @Override
                    public void success(Response result, Response response) {

                        try {
                            BufferedReader reader=new BufferedReader(new InputStreamReader(response.getBody().in()));
                            String output=reader.readLine();
                            Toast.makeText(register.this, ""+output, Toast.LENGTH_SHORT).show();
                            if(output.equals("1")) {
                                Toast.makeText(register.this, "Success", Toast.LENGTH_SHORT).show();
                                Intent i1=new Intent(register.this,login.class);
                                startActivity(i1);
                            }

                            else
                            {
                                Toast.makeText(register.this, "Fail", Toast.LENGTH_SHORT).show();
                            }
                        } catch (Exception e) {
                            Toast.makeText(register.this, "Fail", Toast.LENGTH_SHORT).show();

                            e.printStackTrace();
                        }

                    }

                    @Override
                    public void failure(RetrofitError error) {
                        Toast.makeText(register.this, "Fail", Toast.LENGTH_SHORT).show();
                    }
                }
        );
    }
}