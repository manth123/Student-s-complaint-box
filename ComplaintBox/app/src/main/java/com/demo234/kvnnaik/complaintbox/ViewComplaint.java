package com.demo234.kvnnaik.complaintbox;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class ViewComplaint extends AppCompatActivity {

    WebView w1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_complaint);
        w1=(WebView) findViewById(R.id.w1);
        w1.setWebViewClient(new WebViewClient());
        w1.getSettings().setJavaScriptEnabled(true);
        w1.loadUrl(Config.ROOT_URL+"viewc.php?uid="+Config.uid);
    }
}
