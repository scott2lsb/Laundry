package cn.fuego.laundry.ui.order;

import java.util.List;

import android.view.View;
import android.widget.TextView;
import cn.fuego.common.util.format.DateUtil;
import cn.fuego.laundry.R;
import cn.fuego.laundry.cache.AppCache;
import cn.fuego.laundry.webservice.up.model.GetOrderListReq;
import cn.fuego.laundry.webservice.up.model.GetOrderListRsp;
import cn.fuego.laundry.webservice.up.model.base.OrderJson;
import cn.fuego.laundry.webservice.up.rest.WebServiceContext;
import cn.fuego.misp.ui.list.MispListActivity;

public class OrderListActivity extends MispListActivity<OrderJson>
{

	@Override
	public void initRes()
	{
		this.activityRes.setAvtivityView(R.layout.my_order);
		this.activityRes.setBackBtn(R.id.back_button);
		this.listViewRes.setListView(R.id.order_list);
		this.listViewRes.setListItemView(R.layout.order_list_item);
		this.listViewRes.setClickActivityClass(OrderActivity.class);
		
	}

	@Override
	public void loadSendList()
	{
		GetOrderListReq req = new GetOrderListReq();
		req.setUser_id(AppCache.getInstance().getUser().getUser_id());
		WebServiceContext.getInstance().getOrderManageRest(this).getAll(req);
		
	}

	@Override
	public List<OrderJson> loadListRecv(Object obj)
	{
		GetOrderListRsp rsp = (GetOrderListRsp) obj;
		
		return rsp.getObj();
	}

	@Override
	public View getListItemView(View view, OrderJson item)
	{
		TextView idView = (TextView) view.findViewById(R.id.order_list_item_id);
		idView.setText(item.getOrder_code());
		TextView priceView = (TextView) view.findViewById(R.id.order_list_item_price);
		priceView.setText(String.valueOf(item.getTotal_price()));
		TextView statusView = (TextView)view.findViewById(R.id.order_list_item_status);
		statusView.setText(item.getOrder_status());
		TextView timeView = (TextView) view.findViewById(R.id.order_list_item_time);
		timeView.setText(item.getCreate_time());
		return view;
	}

	
 
 

	 

}