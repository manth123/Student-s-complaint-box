package com.demo234.kvnnaik.complaintbox;

import retrofit.Callback;
import retrofit.client.Response;
import retrofit.http.Field;
import retrofit.http.FormUrlEncoded;
import retrofit.http.POST;

/**
 * Created by Belal on 11/5/2015.
 */
public interface RegisterAPI {
    @FormUrlEncoded
    @POST("/register.php")
    void insertUser(
            @Field("name") String s1,
            @Field("email") String s2,
            @Field("pass") String s3,
            Callback<Response> callback);
    @FormUrlEncoded
    @POST("/addc.php")
    void insertComplaint(
            @Field("class") String s1,
            @Field("type") String s2,
            @Field("description") String s3,
            @Field("uid") int s4,
            Callback<Response> callback);


    @FormUrlEncoded
    @POST("/login.php")
   void loginUser(
            @Field("email") String s,
            @Field("pass") String s1,

            Callback<Response> callback);



}