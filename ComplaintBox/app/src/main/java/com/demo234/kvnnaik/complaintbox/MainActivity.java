package com.demo234.kvnnaik.complaintbox;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity implements Runnable {
    Thread t1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        t1=new Thread( MainActivity.this);
        t1.start();
    }

    @Override
    public void run() {
        try {
            t1.sleep(2000);
        }
        catch (InterruptedException e)
        {
            e.printStackTrace();
        }
        finally {

            finish();
            Intent i1=new Intent(MainActivity.this,register.class);
            startActivity(i1);
        }
    }

}
