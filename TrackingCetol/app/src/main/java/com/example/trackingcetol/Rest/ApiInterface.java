package com.example.trackingcetol.Rest;

/**
 * Created by root on 2/3/17.
 */

import com.example.trackingcetol.Model.GetKontak;
import com.example.trackingcetol.Model.PostPutDelKontak;
import com.example.trackingcetol.Model.GetKontak;
import com.example.trackingcetol.Model.PostPutDelKontak;
import com.example.trackingcetol.Model.TampilCek;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.HTTP;
import retrofit2.http.POST;
import retrofit2.http.PUT;

public interface ApiInterface {
    @GET("kontak_android")
    Call<GetKontak> getKontak();

    @FormUrlEncoded
    @POST("ambilstatus")
    Call<TampilCek> postKontak(@Field("id_pesan") String id_pesan);
    @FormUrlEncoded
    @PUT("kontak")
    Call<PostPutDelKontak> putKontak(@Field("id") String id,
                                     @Field("nama") String nama,
                                     @Field("nomor") String nomor);
    @FormUrlEncoded
    @HTTP(method = "DELETE", path = "kontak", hasBody = true)
    Call<PostPutDelKontak> deleteKontak(@Field("id") String id);
}