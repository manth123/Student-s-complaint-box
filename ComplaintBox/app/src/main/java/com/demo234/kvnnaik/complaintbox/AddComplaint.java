package com.demo234.kvnnaik.complaintbox;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;

import retrofit.Callback;
import retrofit.RetrofitError;
import retrofit.client.Response;

public class AddComplaint extends AppCompatActivity {

    EditText t1;
    Button b1;
    Spinner spinner2,spinner3;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_complaint);
        spinner2  = (Spinner) findViewById( R.id.spinner2 );
        List<String> list=new ArrayList<String>();
        list.add("FyBSc(CS)");
        list.add("SyBSc(CS)");
        list.add("TyBSc(CS)");
        list.add("MSc-I(CS)");
        list.add("MSc-II(CS)");
        ArrayAdapter<String> dataAdapter=new ArrayAdapter<String>(this,android.R.layout.simple_spinner_item,list);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner2.setAdapter(dataAdapter);

        spinner3 = (Spinner) findViewById( R.id.spinner3 );
        List<String>list2=new ArrayList<String>();
        list2.add("Cleanliness");
        list2.add("Teacher Complaint");
        list2.add("Ragging");


        ArrayAdapter<String> dataAdapter2=new ArrayAdapter<String>(this,android.R.layout.simple_spinner_item,list2);
        dataAdapter2.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner3.setAdapter(dataAdapter2);
        t1=(EditText)findViewById(R.id.editText);
        b1=(Button) findViewById(R.id.button);
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                insertcode();
            }
        });

    }
    private void insertcode() {
        Config s1=new Config();
        s1.abc();
        s1.api.insertComplaint(
                spinner2.getSelectedItem().toString(),
                spinner3.getSelectedItem().toString(),
                t1.getText().toString(),
                Config.uid,




                new Callback<Response>() {
                    @Override
                    public void success(Response result, Response response) {

                        try {
                            BufferedReader reader=new BufferedReader(new InputStreamReader(response.getBody().in()));
                            String output=reader.readLine();
                            if(output.equals("1")) {
                                Toast.makeText(AddComplaint.this, "Added Complaint Sucessfully", Toast.LENGTH_SHORT).show();

                            }

                            else
                            {
                                Toast.makeText(AddComplaint.this, "Fail", Toast.LENGTH_SHORT).show();
                            }
                        } catch (Exception e) {
                            Toast.makeText(AddComplaint.this, "Fail", Toast.LENGTH_SHORT).show();

                            e.printStackTrace();
                        }

                    }

                    @Override
                    public void failure(RetrofitError error) {
                        Toast.makeText(AddComplaint.this, "Fail", Toast.LENGTH_SHORT).show();
                    }
                }
        );}
}
