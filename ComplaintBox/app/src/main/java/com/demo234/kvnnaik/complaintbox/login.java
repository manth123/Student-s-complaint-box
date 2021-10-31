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

public class login extends AppCompatActivity implements View.OnClickListener {
    Button b1,b2;
    EditText e1,e2;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        e1 =(EditText) findViewById(R.id.et1);
        e2 =(EditText) findViewById(R.id.et2);

        b1 =(Button) findViewById(R.id.b);
        b1.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        try {

            Config s1 = new Config();
            s1.abc();
            s1.api.loginUser(
                    e1.getText().toString() ,
                    e2.getText().toString() ,


                    new Callback<Response>() {
                        @Override
                        public void success(Response result,Response response) {

                            try {
                                BufferedReader reader=new BufferedReader( new InputStreamReader(response.getBody().in()));
                                String output=reader.readLine();
                               // Toast.makeText(login.this ,""+output,Toast.LENGTH_SHORT).show();

                                if (output.equals("0"))
                                {
                                    Toast.makeText(login.this,"Invalid credentials",Toast.LENGTH_SHORT).show();

                                }
                                else
                                    {
                                    Intent i1 = new Intent( login.this , navigation.class);
                                    Config.uid = Integer.parseInt(output);
                                    startActivity(i1);
                                }
                                Toast.makeText(login.this,""+output,Toast.LENGTH_SHORT).show();
                            } catch (Exception e) {

                                e.printStackTrace();
                            }

                        }

                        @Override
                        public void failure(RetrofitError error) {
                            Toast.makeText( login.this,error.toString(),Toast.LENGTH_LONG).show();
                        }
                    }
            );
        }
        catch (Exception ex)
        {

        }
    }
}

