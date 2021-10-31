package com.demo234.kvnnaik.complaintbox;

import android.content.Context;
import android.content.DialogInterface;
import android.support.v7.app.AlertDialog;

import retrofit.RestAdapter;

public class Config {
    public static final String ROOT_URL = "http://192.168.43.223/complaint/";


    public static int uid;
    public static String cid="";
    RegisterAPI api;
    Context ctx;
    public void abc() {
        RestAdapter adapter = new RestAdapter.Builder()
                .setEndpoint(Config.ROOT_URL) //Setting the Root URL
                .build(); //Finally building the adapter
        api = adapter.create(RegisterAPI.class);
    }
    public void createalertone(Context ctx, String s1) {
        this.ctx = ctx;
        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder( ctx );
        alertDialogBuilder.setMessage( s1 );
        alertDialogBuilder.setPositiveButton( "yes" ,
                new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface arg0 , int arg1) {


                    }
                } );


        AlertDialog alertDialog = alertDialogBuilder.create();
        alertDialog.show();

    }
    }